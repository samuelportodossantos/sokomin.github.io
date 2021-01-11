<div class="android-header mdl-layout__header mdl-layout__header--waterfall">
    <div class="mdl-layout__header-row">
        <span class="android-title mdl-layout-title">
            <a href="https://sokomin.github.io/index.html">
                <img class="android-logo-image" src="design/logo3.png" />
            </a>
        </span>
        <!-- Add spacer, to align navigation to the right in desktop -->
        <div class="android-header-spacer mdl-layout-spacer"></div>
        <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
                <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
                <input placeholder="サイト内検索(Enterで実行)" class="mdl-textfield__input" type="text" onkeypress="enter();" id="search-field" />
            </div>
        </div>
        <!-- Navigation -->
        <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
                <a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://sokomin.github.io/index.html">ホーム</a>
                <a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://sokomin.github.io/calculator.html">計算機</a>
                <a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://sokomin.github.io/history.html">赤石史</a>
                <a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://sokomin.github.io/link.html">リンク</a>
                <a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://marshmallow-qa.com/sokoranominnsyu">お問合せ</a>
            </nav>
        </div>
        <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="design/logo3.png" />
        </span>
        <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item"><a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://sokomin.github.io/calculator.html">計算機</a></li>
            <li class="mdl-menu__item"><a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://sokomin.github.io/history.html">赤石史</a></li>
            <li disabled class="mdl-menu__item"><a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://sokomin.github.io/link.html">リンク</a></li>
            <li class="mdl-menu__item"><a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://marshmallow-qa.com/sokoranominnsyu">お問合せ</a></li>
        </ul>

    </div>
</div>