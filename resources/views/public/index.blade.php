@php
    Log::info('View variables: ', get_defined_vars()['__data']);
@endphp

<!doctype html>
<html lang="en">


        @include('includes.head')

    <main>


        @include('includes.navbar')


        @include('includes.home')

        @include('includes.trend')

        @include('includes.explore')

        @include('includes.timeline')

        @include('includes.testimonials')

        @include('includes.faq')
       

        @include('includes.contact')
      
    </main>

    
        @include('includes.footer')


        @include('includes.script')


</body>

</html>