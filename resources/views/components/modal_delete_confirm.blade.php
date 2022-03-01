<div id="model-delete-confirm" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="form-modal-delete" action="" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title">Deseja realmente excluir este item ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>@lang('labels.delete') <span id="item-delete"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal"><i class="fas fa-times"></i>@lang('labels.no')</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i>
                        @lang('labels.yes')</button>
                </div>
            </form>
        </div>
    </div>
</div>
