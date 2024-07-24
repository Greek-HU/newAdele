<form action="createNewElement" method="post">
    @csrf
    <div class="modal fade" id="addElement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Új elem hozzáadása</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                
                <div class="modal-body text-center">
                    <table class="card">
                        <thead class="d-flex justify-content-center bg-warning-subtle">
                            <tr>
                                <th class="p-4">
                                    <!--input type="text" name="newNailType" id="newNailType" size="7" class="text-center" placeholder="{{ $nailType->type }}"-->
                                    <select name="newType" id="">
                                        @if(!empty($nailType))
                                        @foreach($nailTypes as $nailType)
                                        <option value="{{ $nailType->id }}">{{ $nailType->type}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </th><br>
                                <th class="p-4">
                                    <!--input type="text" name="newNailSize" id="newNailSize" size="5" class="text-center"-->
                                    <select name="newNailSize">
                                        @if(!empty($nailSizes))
                                            @foreach($nailSizes as $nailSize)                                        
                                                <option value="{{ $nailSize->id }}">{{ $nailSize->size_name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </th>
                                <th class="p-4">
                                    <select name="newAmount">
                                        @if(!empty($nailPrices))
                                            @foreach($nailPrices as $nailPrice)                                        
                                                <option value="{{ $nailPrice->id }}">{{ $nailPrice->amount }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégsem</button>
                    <button type="submit" class="btn btn-success">Mentés</button>
                </div>
            </div>
        </div>
    </div>
</form>