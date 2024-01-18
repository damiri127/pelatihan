@extends('kemahasiswaan.dashboard.layouts.main')
@section('content')
<div class="card direct-chat direct-chat-warning">
    <div class="card-header">
        <h3 class="card-title">Pesan Langsung</h3>
        <div class="card-tools">
            <span title="3 New Messages" class="badge badge-warning">3</span>
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="col-md-6">
            <div class="direct-chat-messages d-inline-flex ml-2">
                <div class="mt-1">
                    @include('kemahasiswaan.message.receive', ['message' => "Halo Ada yang bisa saya bantu?"])
                </div>
            </div>
            <div class="mt-2">
                <form>
                    <div class="input-group">
                        <input type="text" name="message" placeholder="Ketik pesan..." class="form-control" autocomplete="off">
                        <span class="input-group-append">
                            <button type="button" type="submit" class="btn btn-info">Kirim</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script>
    const pusher = new Pusher('{{ config('broadcasting.connections.pusher.key') }}', {cluster: 'ap1'});
    const channel = pusher.subscribe('private');

    //Recieve Message 
    channel.bind('chat', function(data){
        $.post("/dashboard-kemahasiswaan/receive", {
            _token: '{{ csrf_token() }}',
            message: data.message,
        })
            .done(function(res){
                $(".messages > .message").last().after(res);
                $(document).scrollTop($(document).height());
            });
    });

    // broadcast messages
    $("form").submit(function(event){
        event.preventDefault();

        $.ajax({
            url: "/dashboard-kemahasiswaan/broadcast",
            method: "POST",
            headers: {
                'X-Socker-Id': pusher.connection.socker_id
            },
            data: {
                _token: '{{ csrf_token() }}',
                message: $("form #message").val(),
            }
        }).done(function(res){
            $(".messages > .message").last().after(res);
            $("form #message").val('');
            $(document).scrollTop($(document).height());
        });
    });
</script>