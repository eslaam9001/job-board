<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // عرض جميع الشركات
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    // عرض صفحة إنشاء شركة جديدة
    public function create()
    {
        return view('companies.create');
    }

    // تخزين شركة جديدة
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'website' => 'nullable|url',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $company = new Company();
        $company->name = $request->name;
        $company->description = $request->description;
        $company->location = $request->location;
        $company->website = $request->website;

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('logos', 'public');
            $company->logo = $path;
        }

        $company->save();

        return redirect()->route('companies.index')->with('success', 'تم إضافة الشركة بنجاح');
    }

    // عرض تفاصيل شركة معينة
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    // عرض صفحة تعديل بيانات شركة
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    // تحديث بيانات الشركة
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'website' => 'nullable|url',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $company->name = $request->name;
        $company->description = $request->description;
        $company->location = $request->location;
        $company->website = $request->website;

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('logos', 'public');
            $company->logo = $path;
        }

        $company->save();

        return redirect()->route('companies.index')->with('success', 'تم تحديث بيانات الشركة بنجاح');
    }

    // حذف شركة
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'تم حذف الشركة بنجاح');
    }
}
