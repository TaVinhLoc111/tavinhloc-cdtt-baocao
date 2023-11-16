<div class="row">
        <div class="form_images">
			<div class="card">
				<div class="top">
					<p>Kéo thả để thêm ảnh</p>
                    
                    
				</div>
				<div class="drag-area">
					<span class="visible">
						Kéo thả ảnh vảo đây hoặc
						<span class="select" role="button">Thêm ảnh</span>
					</span>
					<span class="on-drop">Thả ra</span>
					<input name="images[]" type="file" class="file" multiple />
				</div>

				<div class="container"> @if ($errors->has('images'))
					<div class="text-danger">
						{{ $errors->first('images') }}
					</div>
				@endif</div>
			</div>
		</div>
       
       

</div>
