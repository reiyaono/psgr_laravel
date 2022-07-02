@extends('layouts.app')

@section('css')
<style>
    header {
        height: 50px;
        background-color: #000;
        padding-left: 20px;
        font-size: large;
        color: #ddd;
    }

    .title {
        position: absolute;
        top: 10px;
    }

    .container {
        margin-top: 40px;
    }
</style>
@endsection

@section('content')
<form method="POST" action="{{ route('memo.post', ['id' => $memo->id])}}">
    @csrf <!-- ハマりポイント -->
    <div class="form-group">
        <label for="title">タイトル</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$memo->title}}">
    </div>
    <div class="form-group">
        <label for="content">内容</label>
        <input type="text" class="form-control" id="content" name="content" value="{{$memo->content}}">
    </div>
    <a href="{{ route('memo.home')}}" class="btn btn-primary">戻る</a>
    <td><a class="btn btn-danger" href="{{ route('memo.delete', ['id' => $memo->id])}}">削除</a></td>
    <button type="submit" class="btn btn-success">追加</button>
</form>
@endsection
