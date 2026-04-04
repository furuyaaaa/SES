@extends('layouts.app')

@section('title', $engineer->name . 'の編集')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">エンジニア編集</h1>
        <a href="{{ route('engineers.show', $engineer) }}" class="text-sm text-gray-500 hover:text-gray-700 transition">&larr; 詳細に戻る</a>
    </div>

    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
        <form action="{{ route('engineers.update', $engineer) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">名前 <span class="text-red-500">*</span></label>
                <input type="text" id="name" name="name" value="{{ old('name', $engineer->name) }}"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 @error('name') border-red-500 @enderror">
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">メール <span class="text-red-500">*</span></label>
                <input type="email" id="email" name="email" value="{{ old('email', $engineer->email) }}"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 @error('email') border-red-500 @enderror">
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="skill" class="block text-sm font-medium text-gray-700 mb-1">スキル <span class="text-red-500">*</span></label>
                <input type="text" id="skill" name="skill" value="{{ old('skill', $engineer->skill) }}"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 @error('skill') border-red-500 @enderror">
                @error('skill')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="experience_years" class="block text-sm font-medium text-gray-700 mb-1">経験年数 <span class="text-red-500">*</span></label>
                <input type="number" id="experience_years" name="experience_years" value="{{ old('experience_years', $engineer->experience_years) }}" min="0"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 @error('experience_years') border-red-500 @enderror">
                @error('experience_years')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="self_pr" class="block text-sm font-medium text-gray-700 mb-1">自己PR</label>
                <textarea id="self_pr" name="self_pr" rows="4"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 @error('self_pr') border-red-500 @enderror">{{ old('self_pr', $engineer->self_pr) }}</textarea>
                @error('self_pr')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-3">
                <a href="{{ route('engineers.show', $engineer) }}" class="border border-gray-300 text-gray-700 px-4 py-2 rounded-md text-sm hover:bg-gray-50 transition">キャンセル</a>
                <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-md text-sm hover:bg-indigo-700 transition">更新</button>
            </div>
        </form>
    </div>
</div>
@endsection
