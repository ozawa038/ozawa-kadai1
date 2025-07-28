<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">✳︎</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}" />
                        </div>
                        <div class="form__error">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">✳</span>
                        <input type="radio" />男性
                        <input type="radio" />女性
                        <input type="radio" />その他
                        <div class="form__group">
                            <div class="form__group-title">
                                <span class="form__label--item">メールアドレス</span>
                                <span class="form__label--required">✳</span>
                            </div>
                            <div class="form__group-content">
                                <div class="form__input--text">
                                    <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
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
                                <span class="form__label--item">電話番号</span>
                                <span class="form__label--required">✳</span>
                            </div>
                            <div class="form__group-content">
                                <div class="form__input--text">
                                    <input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel') }}" />
                                </div>
                                <div class="form__error">
                                    @error('tel')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="form__group-title">
                                <span class="form__label--item">住所</span>
                                <span class="form__label--required">✳</span>
                            </div>
                            <div class="form__group-content">
                                <div class="form__input--text">
                                    <input type="adress" name="adress" placeholder="東京都千駄ヶ谷1-2-3" value="{{ old('adress') }}" />
                                </div>
                                <div class="form__error">
                                    @error('adress')
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
                                    <input type="building" name="building" placeholder="09012345678" value="{{ old('building') }}" />
                                </div>
                                <div class="form__error">
                                    @error('building')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="form__group-title">
                                <span class="form__label--item">お問い合わせの種類</span>
                                <span class="form__label--required">✳</span>
                            </div>
                            <div class="form__group-content">
                                <div class="form__input--text">
                                    <input type="kinds" name="kinds" placeholder="09012345678" value="{{ old('kinds') }}" />
                                </div>
                                <div class="form__error">
                                    @error('kinds')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="form__group-title">
                                <span class="form__label--item">お問い合わせ内容</span>
                            </div>
                            <div class="form__group-content">
                                <div class="form__input--textarea">
                                    <textarea name="content" placeholder="資料をいただきたいです"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form__button">
                            <button class="form__button-submit" type="submit">確認画面</button>
                        </div>
            </form>
        </div>
    </main>
</body>

</html>