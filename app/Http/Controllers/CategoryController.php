<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCategoryRequest;
use App\Models\Category;
use App\Services\CategoriesService;

class CategoryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getList()
    {
        $data = Category::all();
        return View('back-end.category.cat-list', ['data' => $data]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAdd()
    {
        $data = Category::where('parent_id', 0)->get();
        return View('back-end.category.add', ['data' => $data]);
    }

    /**
     * @param AddCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAdd(AddCategoryRequest $request)
    {
        CategoriesService::addCategory();
        return redirect()->route('getCat')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã thêm thành công !']);

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEdit($id)
    {
        $cat = Category::where('parent_id', 0)->get();
        $data = Category::findOrFail($id)->toArray();
        return View('back-end.category.edit', ['cat' => $cat, 'data' => $data]);
    }

    /**
     * @param $id
     * @param AddCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEdit($id, AddCategoryRequest $request)
    {
        $category = category::find($id);
        CategoriesService::updateCategory($category);
        return redirect()->route('getCat')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã sửa']);

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
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
