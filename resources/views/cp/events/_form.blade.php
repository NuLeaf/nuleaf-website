<div class="form-group">
  <label for="title">Title:</label>
  <input class="form-control" type="text" maxlength="100" name="title" value="{{ $event->title or old('subject') }}"/>
</div>
<div class="form-group">
  <label for="location">Location:</label>
  <input class="form-control" type="text" maxlength="100" name="location" value="{{ $event->location or old('location') }}"/>
</div>
<div class="form-group">
  <label for="date">Date:</label>
  <input id='dateTimePicker' class="form-control" type="text" maxlength="100" name="date" value="{{ date('F jS, Y h:i A', strtotime(isset($event->date) ? $event->date : old('date'))) }}"/>
</div>
<input type="submit" name="submit" value="{{ $submitButtonValue }}"/>