@csrf
<input type="text" name="title" placeholder="Title" value="{{ old('title', $task->title ?? '') }}" required><br>
<textarea name="description" placeholder="Description">{{ old('description', $task->description ?? '') }}</textarea><br>
<input type="date" name="due_date" value="{{ old('due_date', $task->due_date ?? '') }}"><br>
<button type="submit">{{ $button ?? 'Save' }}</button>
