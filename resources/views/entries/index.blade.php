<!doctype html>
<html>
<head>
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
       .passed{
          background:#bada55;
       }
       .failed{
          background: #cd0000;
       }
    </style>
</head>
<body>
   <div class="container">
      <table class="table table-sm">
         <thead>
            <tr>
               <th>Workout</th>
               <th>Pull-ups</th><th></th>
               <th>Dips</th><th></th>
               <th>Squats</th><th></th>
               <th>Rows</th><th></th>
               <th>Push-ups</th><th></th>
            </tr>
         </thead>
         <tbody>
            
            @foreach ($array as $key=>$entry)
               @if($entry[1] > 9)
                  @php $class1 = 'passed'; @endphp
               @else
                  @php $class1 = 'failed'; @endphp
               @endif
               @if($entry[2] > 9)
                  @php $class2 = 'passed'; @endphp
               @else
                  @php $class2 = 'failed'; @endphp
               @endif
               @if($entry[3] > 9)
                  @php $class3 = 'passed'; @endphp
               @else
                  @php $class3 = 'failed'; @endphp
               @endif
               @if($entry[4] > 9)
                  @php $class4 = 'passed'; @endphp
               @else
                  @php $class4 = 'failed'; @endphp
               @endif
               @if($entry[5] > 9)
                  @php $class5 = 'passed'; @endphp
               @else
                  @php $class5 = 'failed'; @endphp
               @endif
               <tr>
                  <td> {{ $key }}</td> 
                  <td class="{{ $class1 }} ">{{ $entry[1] }}</td><td>{{ $entry[1] * 10 }}%</td>
                  <td class="{{ $class2 }} ">{{ $entry[2] }}</td><td>{{ $entry[2] * 10 }}%</td>
                  <td class="{{ $class3 }} ">{{ $entry[3] }}</td><td>{{ $entry[3] * 10 }}%</td>
                  <td class="{{ $class4 }} ">{{ $entry[4] }}</td><td>{{ $entry[4] * 10 }}%</td>
                  <td class="{{ $class5 }} ">{{ $entry[5] }}</td><td>{{ $entry[5] * 10 }}%</td>
               <tr>
            @endforeach
      
         </tbody>
      </table>
   </div>
</body>
</html>