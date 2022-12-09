<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{
	public function index(Request $request)
	{
		dd(url('/'));
		return view('fileUpload');
	}

	public function store(Request $request)
	{
		$request->validate(
			[
				'name' => 'required|string',
				'payment' => 'required|numeric',
				'file' => 'required',
			],
			[
				'name.required' => 'กรุณากรอกชื่อ',
				
				'payment.required' => 'กรุณากรอกจำนวนเงิน',
				'payment.numeric' => 'กรุณากรอกเป็นตัวเลข',
				'file.required' => 'กรุณาแนบไฟล์',
			]
		);


		$input = $request->only(['name', 'payment']);
		$file = $request->file('file');
		
		$file = $request->file('file');
		
		$input['file'] = $file->getClientOriginalName();
		$file->move(public_path('upload'), $file->getClientOriginalName());

		$input['url'] = url('/') . '/upload/' . str_replace(' ', '%20',$file->getClientOriginalName());

		File::create($input);

		return redirect()->back()
		->with('status', 'success')
		->with('success', 'success Full file upload');;
	}
}
