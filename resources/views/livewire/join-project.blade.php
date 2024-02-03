<div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-header">
                        <h3>Join Project</h3>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="joinProject">
                            <div class="form-group">
                                <label for="project_id">Project</label>
                                <select wire:model="project_id" class="form-control">
                                    <option value="">Select Project</option>
                                    @foreach($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                                    @endforeach
                                </select>
                                @error('project_id') <span class="text-danger">{{ $message }}</span> @enderror
</div>
