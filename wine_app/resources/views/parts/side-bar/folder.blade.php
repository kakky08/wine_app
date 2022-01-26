{{-- Make_folder start --}}
<form method="POST" action="" class="">
    @csrf
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="フォルダ名を入力" aria-label="フォルダ名を入力" aria-describedby="search-word-button">
        <button class="btn btn-outline-secondary" type="button" id="search-word-button">作成</button>
    </div>
</form>
{{-- Make_folder end --}}
{{-- Accordion_folder start --}}
@for ($i = 0; $i < 3; $i++)
    <div class="accordion accordion-flush" id="accordion-folder-{{ $i }}">
        <div class="accordion-item">
            <h2 class="accordion-header" id="accordion-folder-{{ $i }}-label">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-folder-{{ $i }}-target" aria-expanded="false" aria-controls="accordion-folder-{{ $i }}-target">
                    {{ $i }}ワインの種類で選ぶ
                </button>
            </h2>
            <div id="accordion-folder-{{ $i }}-target" class="accordion-collapse collapse" aria-labelledby="accordion-folder-{{ $i }}-label" data-bs-parent="#accordion-folder-{{ $i }}">
                <ul>
                    <a href=""><li>aaa</li></a>
                </ul>
            </div>
        </div>
    </div>
@endfor
{{-- Accordion_folder end --}}
