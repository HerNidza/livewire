<!DOCTYPE html>
<html lang="en">
<x-front-head/>
<body>

{{ $slot }}

<x-front-scripts :footerScripts="$footerScripts ?? false" />
</body>
</html>
