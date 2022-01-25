{{-- Search_word start --}}
<form method="POST" action="" class="">
    @csrf
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="ワインの名前" aria-label="ワインの名前" aria-describedby="search-word-button">
        <button class="btn btn-outline-secondary" type="button" id="search-word-button">検索</button>
    </div>
</form>
{{-- Search_word end --}}
{{-- Accordion_menu_type start --}}
<div class="accordion accordion-flush" id="accordion-menu-type">
    <div class="accordion-item">
        <h2 class="accordion-header" id="accordion-menu-type-label">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-menu-type-target" aria-expanded="false" aria-controls="accordion-menu-type-target">
                ワインの種類で選ぶ
            </button>
        </h2>
        <div id="accordion-menu-type-target" class="accordion-collapse collapse" aria-labelledby="accordion-menu-type-label" data-bs-parent="#accordion-menu-type">
            <ul>
                <a href=""><li>aaa</li></a>
            </ul>
        </div>
    </div>
</div>
{{-- Accordion_menu_type end --}}
{{-- Accordion_menu_country start --}}
<div class="accordion accordion-flush" id="accordion-menu-country">
    <div class="accordion-item">
        <h2 class="accordion-header" id="accordion-menu-country-label">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-menu-country-target" aria-expanded="false" aria-controls="accordion-menu-country-target">
                産地で選ぶ
            </button>
        </h2>
        <div id="accordion-menu-country-target" class="accordion-collapse collapse" aria-labelledby="accordion-menu-country-label" data-bs-parent="#accordion-menu-country">
            <ul>
                <a href=""><li>aaa</li></a>
            </ul>
        </div>
    </div>
</div>
{{-- Accordion_menu_country end --}}
