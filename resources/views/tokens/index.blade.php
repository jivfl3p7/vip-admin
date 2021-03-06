@extends('layouts.app')

@section('content')
    <h1>Current generated Tokens </h1>
    
    {!! Form::open(['route' => 'tokens.storeExtra', 'method' => 'POST', ]) !!}
    <p>
        <button id="generate" type="submit" name="generate" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> @lang('messages.generate-extra-tokens')</button>
    </p>
    {!! Form::close() !!}
    @if(Auth::user()->isAdmin())
        <p><a href="?trashed=true" id="generate" type="submit" name="generate" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> @lang('messages.token-show-trashed')</a></p>
    @endif
    
    <table id="datatables" class="table table-bordered {{ isset($highlight) ? '' : 'table-striped ' }}">
        <thead>
        <tr>
            <th>{{ trans_choice('messages.token', 1) }}</th>
            <th>@lang('messages.duration')</th>
            <th>@lang('messages.expiration')</th>
            <th>@lang('messages.expiration-remaining')</th>
            <th>@lang('messages.redeem-user')</th>
            <th>@lang('messages.note')</th>
            <th>@lang('messages.owner')</th>
            <th>@lang('messages.state')</th>
            <th>@lang('messages.actions')</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tokens as $key=>$token)
            <tr {{ isset($token->tokenOrder->baseOrder->user->steamid) && $token->tokenOrder->baseOrder->user->steamid == $highlight || isset($token->user) && $token->user->steamid == $highlight ? 'class=info' : ($token->trashed() ? 'class=danger' : '') }}>
                <!-- Token -->
                <td data-order="{{ $key }}" scope="row"><a href="{{ route('tokens.show', $token) }}"><code>{{ $token->token}}</code></a></td>
                
                <!-- Duration -->
                <td>{{ $token->duration }} {{ strtolower(trans_choice('messages.time.days', 2)) }}</td>
                
                <!-- Expiration -->
                <td>{{ $token->expiration }} {{ strtolower(trans_choice('messages.time.hours', 2)) }}</td>
                
                <!-- Expiration remaining -->
                @if($token->status()['text'] == 'Used')
                    <td>@lang('messages.already-used')</td>
                @elseif($token->status()['text'] == 'Expired')
                    <td>@lang('messages.expired') {{ $token->created_at->addHours($token->expiration)->diffForHumans() }}</td>
                @else
                    <td>{{ $token->created_at->addHours($token->expiration)->diffForHumans() }}</td>
                @endif
            
            <!-- Redeem User -->
                @if($token->tokenOrder && $token->tokenOrder->baseOrder)
                    <td>
                        <a href="http://steamcommunity.com/profiles/{{ $token->tokenOrder->baseOrder->user->steamid }}">{{ $token->tokenOrder->baseOrder->user->username }}</a>
                        <a href="?highlight={{ $token->tokenOrder->baseOrder->user->steamid }}" title="Highlight confirmations from {{ $token->tokenOrder->baseOrder->user->username }}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                    </td>
                @else
                    <td>N/A</td>
                @endif
            
            <!-- Note -->
                <td>{{ $token->note }}</td>
                
                <!-- Owner -->
                @if($token->user)
                    <td>
                        <a href="http://steamcommunity.com/profiles/{{ $token->user->steamid }}">{{ $token->user->username }}</a>
                        <a href="?highlight={{ $token->user->steamid }}" title="Highlight confirmations from {{ $token->user->username }}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                    </td>
                @else
                    <td>@lang('messages.system')</td>
            @endif
            
            <!-- Status -->
                <td><span class="label label-{{ $token->status()['class'] }}">{{ $token->status()['text'] }}</span></td>
                
                <!-- Actions -->
                <td style="white-space: nowrap;">
                    @if($token->tokenOrder && $token->tokenOrder->baseOrder)
                        <a class="btn btn-xs btn-default" href="{{ route('token-orders.show', $token->tokenOrder->baseOrder->public_id) }}">@lang('messages.order-view-details')</a>
                    @else
                        <a class="btn btn-xs btn-primary" href="{{ route('tokens.edit', $token) }}">@lang('messages.edit')</a>
                    @endif
                    @if(Auth::user()->isAdmin())
                        @if($token->trashed())
                            {!! Form::open(['route' => ['tokens.restore', $token], 'method' => 'PATCH', 'style' => 'display: inline;']) !!}
                            <button class="btn btn-xs btn-primary">@lang('messages.restore')</button>
                            {!! Form::close() !!}
                        @else
                            {!! Form::open(['route' => ['tokens.delete', $token], 'method' => 'DELETE', 'style' => 'display: inline;']) !!}
                            <button class="btn btn-xs btn-danger">@lang('messages.delete')</button>
                            {!! Form::close() !!}
                        @endif
                    @endif
                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
@endsection

@push('scripts')
    <script>

        $(document).ready(function () {
            $('#datatables').DataTable({
                "iDisplayLength": 50
            });
        });
    
    </script>
@endpush