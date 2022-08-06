<div>
 
    <button class="btn btn-primary btn-sm mb-3" wire:click='OpenAddCountryModal'>Add New Country</button>
    <div>
            <button class="btn btn-danger" >Selected Countries</button>
    </div>
    <table class="table table-hover">
        <thead class="thead-inverse">
            <tr>
                <th></th>
                <th>Continent</th>
                <th>Country</th>
                <th>Capital City</th>
                <th>Actions</th>
                <th></th>
            </tr>
            </thead>
            <tbody>

                @forelse ($countries as $country)
                    <tr>
                    <td><input type="checkbox" value="{{ $country->id }}" ></td>
                    <td>{{ $country->continent->continent_name }}</td>
                    <td>{{ $country->country_name }}</td>
                    <td>{{ $country->capital_city }}</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-danger btn-sm">Delete</button>
                            <button class="btn btn-success btn-sm" wire:click="OpenEditCountryModal({{ $country->id }})">Edit</button>
                        </div>
                    </td>
                </tr>
                @empty
                    <code>No country found!</code>
                @endforelse
                
            </tbody>
    </table>
    @include('modals.add-modal')
    @include('modals.edit-modal')


</div>
