@section('scripts')
<script>
    $(function () {
                $('#published_at').datetimepicker({
                    format: "YYYY-MM-DD:mm:ss"
                });
                
                $("#tag").select2();
                
            });

</script>
@endsection
