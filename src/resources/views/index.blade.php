<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
</head>

<body>

    <main>
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2>お問い合わせ</h2>
        </div>
        <form class="h-adr form" action="/contacts/confirm" method="post">
            @csrf
            <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                <div class="form__group-content">
                    <div class="form__input-name">
                        <input type="text" name="family_name" value="{{ old('family_name') }}" />
                        <input type="text" name="given_name" value="{{ old('given_name') }}" />
                        <div class="name-sample">
                            <p>例）山田</p>
                            <p class='name-sample_first'>例）太郎</p>
                        </div>
                    </div>
                    <div class="form__error">
                        @error('family_name')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form__error">
                        @error('given_name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--radio">
                            <label class="radio">
                                <input class="radio__btn" type="radio" name="gender" value="男性" checked="checked">
                                <span class="radio__text">男性</span>
                            </label>
                            <label class="radio">
                                <input class="radio__btn" type="radio" name="gender" value="女性">
                                <span class="radio__text">女性</span>
                            </label>
                    </div>
                </div>
            </div>
            <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" value="{{ old('email') }}" />
                    <p style="text-align: left">例）test@example.com</p>
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            </div>
            <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
            <div class="form__input--text">
                <p class="postmark">〒</p>
                <span class="p-country-name" style="display:none;">Japan</span>
                <input type="postcode" name="postcode" class="p-postal-code"  size="8" maxlength="8" value="{{ old('postcode') }}" />
                <p style="text-align: left">例)123-4567</p>
            </div>
            <div class="form__error">
                @error('postcode')
                {{ $message }}
                @enderror
            </div>
            </div>
            </div>
            <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="address" name="address" class="p-region p-locality p-street-address p-extended-address" value="{{ old('address') }}" />
                    <p style="text-align: left">例)東京都渋谷区千駄ヶ谷1-2-3</p>
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="address" name="building_name" value="{{ old('building_name') }}" />
                        <p style="text-align: left">例)千駄ヶ谷マンション101</p>
                    </div>
                    <div class="form__error">
                    @error('building_name')
                    {{ $message }}
                    @enderror
                </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">ご意見</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="content" value="{{ old('content') }}" ></textarea>
                </div>
                <div class="form__error">
                    @error('content')
                    {{ $message }}
                    @enderror
                </div>
                </div>
            </div>
            </div>
            <div class="form__button">
            <button class="form__button-submit" type="submit">確認
            </button>
            </div>
        </form>
    </div>
    </main>
</body>

</html>