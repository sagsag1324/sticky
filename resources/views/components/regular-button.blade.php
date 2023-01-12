<span class="regular-button-container mx-3"
    @if (!@empty($model_id)) data-bs-toggle="modal" data-bs-target="#{{ $model_id }}" @endif>
    <button class="custom-btn btn-{{ $button_number }}"
        @if(!@empty($element_id)) id="{{ $element_id }}" @endif><span>{{ $text }}</span></button>
  
</span>
