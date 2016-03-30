<div class="form-group">
  <label for="title">Title:</label>
  <input class="form-control" type="text" maxlength="100" name="title" value="{{ $steminar->title or old('subject') }}"/>
</div>
<div class="form-group">
  <label for="location">Location:</label>
  <input class="form-control" type="text" maxlength="100" name="location" value="{{ $steminar->location or old('location') }}"/>
</div>
<div class="form-group">
  <label for="date">Date:</label>
  <input id='dateTimePicker' class="form-control" type="text" maxlength="100" name="date" value="{{ date('F jS, Y h:i A', strtotime(isset($steminar->date) ? $steminar->date : old('date'))) }}"/>
</div>
<div class="form-group">
  <label for="body">Body:</label>
  <textarea id="steminar-body" name="body" class="form-control ckeditor" rows="7" value="{{ $steminar->body or old('body') }}"></textarea>
</div>
<input type="submit" name="submit" value="{{ $submitButtonValue }}"/>