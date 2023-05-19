<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration</title>
</head>
<body>
    <form action="{{ route('studentStore')}}" method="POST"> 
        @csrf
        <div><h3>Student Details</h3></div>
        <div>
            <label for="sname"> Student Name: </label>
            <input type="text" name="sname" id="sname" required>
        </div>
        <div>
            <select name="sgender" id="sgender">
                <option value="F">F</option> 
                <option value="M">M</option> 
            </select>
        </div>
        <div>
            <label for="standard"> Standard: </label>
            <input type="text" name="standard" id="standard" required>
        </div>
        <div>
            <label for="division"> Division: </label>
            <input type="text" name="division" id="division" required>
        </div>
        <div><h3>Guardian Details</h3></div>
        <div>
            <label for="gname"> Guardian Name: </label>
            <input type="text" name="gname" id="gname" required>
        </div>
        <div>
            <select name="ggender" id="ggender">
                <option value="F">F</option> 
                <option value="M">M</option> 
            </select>
        </div>
        <div>
            <label for="email"> Email: </label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="phone"> Phone: </label>
            <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" required>
            <small>Format: 0123456789</small>
        </div>
        <div><h3>Address</h3></div>
        <div id="addresses">
            
            {{-- address will be added here --}}

        </div>
        <button type="button" onclick='addAddress()'> Add Address</button>
        <br>
        <button type="submit" class="btn btn-primary"> Save </button>
    </form>
    <script>
        
        function addAddress(){
            const addressTypes = @json($addressTypes);
            const addressDiv = document.createElement('div');

            const bnumberLabel  = document.createElement('label');
            bnumberLabel.textContent = "Building Number:";
            addressDiv.appendChild(bnumberLabel);

            const bnumberInput = document.createElement('input');
            bnumberInput.type = 'text';
            bnumberInput.name = 'addresses[][bnumber]';
            bnumberInput.required = true;
            addressDiv.appendChild(bnumberInput);
            addressDiv.appendChild(document.createElement('br'));

            const fnumberLabel  = document.createElement('label');
            fnumberLabel.textContent = "Flat Number:";
            addressDiv.appendChild(fnumberLabel);

            const fnumberInput = document.createElement('input');
            fnumberInput.type = 'text';
            fnumberInput.name = 'addresses[][fnumber]';
            addressDiv.appendChild(fnumberInput);
            addressDiv.appendChild(document.createElement('br'));

            const areaLabel  = document.createElement('label');
            areaLabel.textContent = "Area:";
            addressDiv.appendChild(areaLabel);

            const areaInput = document.createElement('input');
            areaInput.type = 'text';
            areaInput.name = 'addresses[][area]';
            addressDiv.appendChild(areaInput);
            addressDiv.appendChild(document.createElement('br'));

            const cityLabel  = document.createElement('label');
            cityLabel.textContent = "City:";
            addressDiv.appendChild(cityLabel);

            const cityInput = document.createElement('input');
            cityInput.type = 'text';
            cityInput.name = 'addresses[][city]';
            addressDiv.appendChild(cityInput);
            addressDiv.appendChild(document.createElement('br'));

            const countryLabel  = document.createElement('label');
            countryLabel.textContent = "Country:";
            addressDiv.appendChild(countryLabel);

            const countryInput = document.createElement('input');
            countryInput.type = 'text';
            countryInput.name = 'addresses[][country]';
            addressDiv.appendChild(countryInput);
            addressDiv.appendChild(document.createElement('br'));

            const addressTypeLabel = document.createElement('label');
            addressTypeLabel.textContent = "Address Type:";
            addressDiv.appendChild(addressTypeLabel);

            const addressTypeSelect = document.createElement('select');
            addressTypeSelect.name = "addresses[][addressType]";
            for(const key of Object.keys(addressTypes)){
                const option = document.createElement('option');
                option.value = addressTypes[key];
                option.textContent = addressTypes[key];
                addressTypeSelect.appendChild(option);
            }
            addressDiv.appendChild(addressTypeSelect);
            addressDiv.appendChild(document.createElement('br'));
            document.getElementById('addresses').appendChild(addressDiv);
        }
    </script>
</body>
</html>