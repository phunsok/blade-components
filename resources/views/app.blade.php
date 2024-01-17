<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <x-container class="py-10">
        <div class="prose">
            <h1>Laravel Blade Components</h1>
            <p>Minimal Laravel Blade UI components styled with TailwindCss.</p>
            
            <h2>Buttons</h2>
            <p>
                <x-button style="primary">Primary Button</x-button>
                <x-button style="secondary">Secondary Button</x-button>
            </p>
            <p>
                <x-button style="primary-outline">Primary Button</x-button>
                <x-button style="secondary-outline">Secondary Button</x-button>
            </p>
            <p>
                <x-button type="submit" style="primary">Submit</x-button>
                <x-button disabled>Disabled</x-button>
            </p>

            

            <h2>Forms</h2>
            <h3>Basic</h3>
            <x-input for="name" class="mb-2"/>
            <x-input for="email" type="email" required class="mb-2"/>
            <x-input for="phone" type="tel" label="Phone No." class="mb-2"/>
            <x-select for="Country" class="mb-2">
                <option value="1">Nepal</option>
                <option value="2">India</option>
            </x-select>
            <div class="mb-2">
                <x-checkbox name="activities[]" for="trekking" checked/>
                <x-checkbox name="activities[]" for="hiking" />
                <x-checkbox name="activities[]" for="jungle_safari" />
            </div>
            <div class="mb-2">
                <x-radio name="destination" for="nepal"></x-radio>
                <x-radio name="destination" for="india" checked></x-radio>
                <x-radio name="destination" for="bhutan"></x-radio>
            </div>
        </div>
    </x-container>
</body>
</html>