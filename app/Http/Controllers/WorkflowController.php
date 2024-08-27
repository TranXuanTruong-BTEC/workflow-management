<?php

namespace App\Http\Controllers;

use App\Models\Workflow;
use Illuminate\Http\Request;

class WorkflowController extends Controller
{
    // Lấy danh sách tất cả workflow
    public function index()
    {
        return Workflow::all();
    }

    // Tạo mới một workflow
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        return Workflow::create($request->all());
    }

    // Lấy thông tin chi tiết của một workflow
    public function show(Workflow $workflow)
    {
        return $workflow;
    }

    // Cập nhật một workflow
    public function update(Request $request, Workflow $workflow)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $workflow->update($request->all());

        return $workflow;
    }

    // Xóa một workflow
    public function destroy(Workflow $workflow)
    {
        $workflow->delete();

        return response()->noContent();
    }
}
