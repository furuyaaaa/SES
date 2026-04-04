@extends('layouts.app')

@section('title', $engineer->name)

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">エンジニア詳細</h1>
        <a href="{{ route('engineers.index') }}" class="text-sm text-gray-500 hover:text-gray-700 transition">&larr; 一覧に戻る</a>
    </div>

    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
        <dl class="divide-y divide-gray-200">
            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                <dt class="text-sm font-medium text-gray-500">名前</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $engineer->name }}</dd>
            </div>
            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                <dt class="text-sm font-medium text-gray-500">メール</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                    <a href="mailto:{{ $engineer->email }}" class="text-indigo-600 hover:text-indigo-800">{{ $engineer->email }}</a>
                </dd>
            </div>
            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                <dt class="text-sm font-medium text-gray-500">スキル</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $engineer->skill }}</dd>
            </div>
            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                <dt class="text-sm font-medium text-gray-500">経験年数</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $engineer->experience_years }}年</dd>
            </div>
            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                <dt class="text-sm font-medium text-gray-500">自己PR</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0 whitespace-pre-wrap">{{ $engineer->self_pr ?: '未登録' }}</dd>
            </div>
            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                <dt class="text-sm font-medium text-gray-500">登録日</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $engineer->created_at->format('Y/m/d H:i') }}</dd>
            </div>
        </dl>
    </div>

    <div class="mt-4 flex items-center justify-end gap-3">
        <a href="{{ route('engineers.edit', $engineer) }}" class="bg-amber-500 text-white px-4 py-2 rounded-md text-sm hover:bg-amber-600 transition">編集</a>
        <form action="{{ route('engineers.destroy', $engineer) }}" method="POST" onsubmit="return confirm('本当に削除しますか？')">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md text-sm hover:bg-red-600 transition">削除</button>
        </form>
    </div>
</div>
@endsection
