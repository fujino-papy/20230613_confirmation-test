<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>管理ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/management.css') }}" />
    <link rel="stylesheet" href="{{ asset('/src/resources/css/app.css')}}"/>
</head>

<main>
    <div class="management__content">
        <div class="management__heading">
        <h2>管理システム</h2>
        </div>
        <form class="form" action="/contacts" method="get">
            @csrf
            <div class="search-table">
                <table class="search-table_inner">
                    <tr class="search-table_content">
                        <th class="search-table-category">お名前</th>
                            <td class="search-table_name">
                            <input class="name" type="text" name="family_name" value="{{ old('family_name') }}" />
                            <input class="name" type="text" name="given_name" value="{{ old('given_name') }}" />
                            </td>
                        <th class="search-table-category_gender">性別</th>
                        <td class="search-table_gender">
                            <label class="radio">
                            <input class="radio__btn" type="radio" name="gender" value="全て" checked="checked">
                                <span class="radio__text">全て</span>
                            </label>
                            <label class="radio">
                                <input class="radio__btn" type="radio" name="gender" value="男性">
                                    <span class="radio__text">男性</span>
                            </label>
                            <label class="radio">
                                <input class="radio__btn" type="radio" name="gender" value="女性">
                                <span class="radio__text">女性</span>
                            </label>
                        </td>
                    </tr>
                    <tr class="search-table_content">
                        <th class="search-table-category">登録日</th>
                        <td class="search-table_date">
                            <input class="date" type="date" name="from">
                            <span class="mx-3">~</span>
                            <input class="date" type="date" name="until">
                        </td>
                    </tr>
                    <tr class="search-table_content">
                        <th class="search-table-category">メールアドレス</th>
                        <td class="search-table_email">
                        <input class="email" type="email" name="email" value="{{ old('email') }}" />
                        </td>
                    </tr>
                    <tr class="search-table_content">
                        <td class="search-table_button">
                        <button class="search-button" action="/management/search"  type="submit" name="search">検索</button>
                        <button class="reset-button" action="/management/reset" type="submit" name="reset">リセット</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
    {{$contacts->links('vendor.pagination.tailwind')}}
    <div class="list-table">
        <table class="list-table_inner" style="width: 100%; max-width: 0 auto;">
            <tr class="list-table_info">
                <th scope ="col">ID</th>
                <th scope ="col">お名前</th>
                <th scope ="col">性別</th>
                <th scope ="col">メールアドレス</th>
                <th scope ="col">ご意見</th>
            </tr>
            @foreach($contacts as $contacts)
            <tr class="list-table_data">
                <td>{{$contacts->id}}</td>
                <td>{{$contacts->family_name}}</td>
                <td>{{$contacts->gender}}</td>
                <td>{{$contacts->email}}</td>
                <td>{{$contacts->content}}</td>
                <td>
                    <form class="delete-form" action="/management/delete" method="POST">
                    @method('DELETE')
                    @csrf
                        <input type="hidden" name="id" value="{{ $contacts['id'] }}">
                        <button class="delete-button" type="submit">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</main>
</html>

