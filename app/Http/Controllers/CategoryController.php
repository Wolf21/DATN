<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\AddCategoryRequest;
use Carbon\Carbon;
use DateTime;

class CategoryController extends Controller
{
    public function getList()
    {
        $data = Category::all();
        return View('back-end.category.cat-list', ['data' => $data]);
    }

    public function getAdd()
    {
        $data = Category::where('parent_id', 0)->get();
        return View('back-end.category.add', ['data' => $data]);
    }

    public function postAdd(AddCategoryRequest $rq)
    {
        $cat = new Category();
        $cat->parent_id = $rq->sltCate;
        $cat->name = $rq->txtCateName;
        $cat->slug = str_slug($rq->txtCateName, '-');
        $cat->created_at = Carbon::now();
        $cat->save();
        return redirect()->route('getCat')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã thêm thành công !']);

    }

    public function getEdit($id)
    {
        $cat = Category::where('parent_id', 0)->get();
        $data = Category::findOrFail($id)->toArray();
        return View('back-end.category.edit', ['cat' => $cat, 'data' => $data]);
    }

    public function postEdit($id, AddCategoryRequest $request)
    {
        $cat = category::find($id);
        $cat->name = $request->txtCateName;
        $cat->slug = str_slug($request->txtCateName, '-');
        $cat->parent_id = $request->sltCate;
        $cat->updated_at = new DateTime;
        $cat->save();
        return redirect()->route('getCat')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã sửa']);

    }

    public function getDelete($id)
    {
        $parent_id = category::where('parent_id', $id)->count();
        if ($parent_id == 0) {
            $category = category::find($id);
            $category->delete();
            return redirect()->route('getCat')
                ->with(['flash_level' => 'result_msg', 'flash_massage' => 'Đã xóa !']);
        } else {
            echo '<script type="text/javascript">
                  alert("Không thể xóa danh mục này !");                
                window.location = "';
            echo route('getCat');
            echo '";
         </script>';
        }
    }
}
