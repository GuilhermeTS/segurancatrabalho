<div class="modal fade bd-example-modal-lg" id="{{ $type }}" tabindex="-1" role="dialog" aria-labelledby="{{ $type }}" aria-hidden="true">
   	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
	  			<h5 class="modal-title" id="{{ $type }}">{{ $title }}</h5>
	  			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body mod">
				{{ $slot }}
			</div>
		</div>
	</div>
</div>