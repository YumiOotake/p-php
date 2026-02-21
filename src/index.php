<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./common.css">
    <link rel="stylesheet" href="./style.css">
    <title>Form</title>
</head>

<body>
    <header class="header">
        <div class="header__logo">
            <h1 class="header__ttl">予約サイト</h1>
        </div>
    </header>
    <main>
        <div class="form__content">
            <div class="form__heading">
                <h2 class="form__ttl">レッスン予約画面</h2>
            </div>
            <form action="./result.php" method="post" class="form">
                <div class="form__item">
                    <label for="name" class="form__label">お名前</label>
                    <input type="text" name="name" id="name" class="form__input">
                </div>
                <div class="form__item">
                    <label for="lesson" class="form__label">レッスン名</label>
                    <select name="lesson" id="lesson" class="form__input">
                        <option value="">選択してください</option>
                        <option value="基礎1">基礎1</option>
                        <option value="基礎2">基礎2</option>
                        <option value="応用1">応用1</option>
                        <option value="応用2">応用2</option>
                    </select>
                </div>
                <div class="form__item">
                    <label for="datetime-local" class="form__label">日時</label>
                    <input type="datetime-local" name="datetime-local" id="datetime-local" class="form__input">
                </div>
                <div class="form__item">
                    <label for="party_size" class="form__label">人数</label>
                    <select name="party_size" id="party_size" class="form__input">
                        <option value="">選択してください</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">予約する</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>