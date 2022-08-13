<div>
    <h2>MessageInputer Component</h2>

    <input type="text" wire:model.debounce.500ms="message" />
    <span>{{ $message }}</span>

    <br/>

    @if(!$message)
        <p style="color:red;font-weight:bold">文字を入力してください。</p>
    @else
        <p>文字を入力しました。</p>
    @endif
</div>
