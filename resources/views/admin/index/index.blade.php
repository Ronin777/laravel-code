@extends('admin.layouts.main');

@section('iframe')
    <iframe scrolling="yes" frameborder="0" src="/admin/welcome"></iframe>
    @endsection

@section('name','超级管理员')

@section('root','Admin')

@section('for')
    @foreach($data as $key=>$item)
        <dl id="{{$item['id']}}">
            <dt><i class="Hui-iconfont">&#xe616;</i> {{$item['title']}}<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    @foreach($item['child'] as $key=>$item1)
                        <li><a data-href="{{$item1['url']}}" href="javascript:void(0);">{{$item1['ctitle']}}</a></li>
                    @endforeach
                </ul>
            </dd>
        </dl>
    @endforeach
@endsection