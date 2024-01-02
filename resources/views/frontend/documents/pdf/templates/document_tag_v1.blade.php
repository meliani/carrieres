<div style="float:right;">
    {!! QrCode::size(180)->generate(
        url(
            'url/v1/' .
                encrypt(
                    user()->id .
                        '/' .
                        user()->student->internship->id .
                        '/' .
                        user()->student->internship->starting_at .
                        '/' .
                        user()->student->internship->ending_at,
                ),
        ),
    ) !!}
</div>
