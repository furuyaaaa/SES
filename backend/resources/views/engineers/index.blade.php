@extends('layouts.app')

@section('title', 'エンジニア一覧')

@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold text-gray-800">エンジニア一覧</h1>
    <a href="{{ route('engineers.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm hover:bg-indigo-700 transition">新規登録</a>
</div>

@if($engineers->isEmpty())
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8 text-center text-gray-500">
        エンジニアが登録されていません。
    </div>
@else
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">名前</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">メール</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">スキル</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">経験年数</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">操作</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($engineers as $engineer)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('engineers.show', $engineer) }}" class="text-indigo-600 hover:text-indigo-800 font-medium">{{ $engineer->name }}</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $engineer->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $engineer->skill }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $engineer->experience_years }}年</td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm space-x-2">
                        <a href="{{ route('engineers.show', $engineer) }}" class="text-gray-500 hover:text-indigo-600 transition">詳細</a>
                        <a href="{{ route('engineers.edit', $engineer) }}" class="text-gray-500 hover:text-amber-600 transition">編集</a>
                        <form action="{{ route('engineers.destroy', $engineer) }}" method="POST" class="inline" onsubmit="return confirm('本当に削除しますか？')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-gray-500 hover:text-red-600 transition">削除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
@endsection
