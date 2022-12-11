<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Title</title>
</head>
<body class="font-poppins">
    {{-- sidebar admin --}}
    <div class="flex flex-row h-full">
        <nav class="bg-neutral w-64  justify-between flex flex-col ">
        <div class="mt-10 mb-10">
            <div>
                <div class="mb-10">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="160" zoomAndPan="magnify" viewBox="0 0 375 225" height="70" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><g/><clipPath id="88921ce186"><path d="M 32.8125 44.492188 L 167.0625 44.492188 L 167.0625 178.742188 L 32.8125 178.742188 Z M 32.8125 44.492188 " clip-rule="nonzero"/></clipPath></defs><rect x="-37.5" width="450" fill="#ffffff" y="-22.5" height="270" fill-opacity="1"/><rect x="-37.5" width="450" fill="#ffffff" y="-22.5" height="270" fill-opacity="1"/><rect x="-37.5" width="450" fill="#ffffff" y="-22.5" height="270" fill-opacity="1"/><g clip-path="url(#88921ce186)"><path fill="#373737" d="M 32.8125 44.492188 L 167.0625 44.492188 L 167.0625 178.742188 L 32.8125 178.742188 L 32.8125 44.492188 " fill-opacity="1" fill-rule="nonzero"/></g><g fill="#ffffff" fill-opacity="1"><g transform="translate(68.799093, 163.549315)"><g><path d="M 39.296875 -83.953125 C 43.578125 -88.472656 48.960938 -92.28125 55.453125 -95.375 C 61.941406 -98.46875 68.9375 -100.015625 76.4375 -100.015625 C 83.945312 -100.015625 90.617188 -98.40625 96.453125 -95.1875 C 102.285156 -91.976562 106.804688 -87.394531 110.015625 -81.4375 C 113.234375 -75.488281 114.84375 -68.523438 114.84375 -60.546875 C 114.84375 -57.097656 114.488281 -53.46875 113.78125 -49.65625 C 111.988281 -39.769531 108.382812 -30.925781 102.96875 -23.125 C 97.550781 -15.332031 90.941406 -9.257812 83.140625 -4.90625 C 75.335938 -0.5625 67.148438 1.609375 58.578125 1.609375 C 51.078125 1.609375 44.675781 0.09375 39.375 -2.9375 C 34.082031 -5.976562 29.945312 -9.757812 26.96875 -14.28125 L 16.25 46.796875 L -4.109375 46.796875 L 21.4375 -98.40625 L 41.796875 -98.40625 Z M 93.0625 -49.65625 C 93.53125 -51.914062 93.765625 -54.351562 93.765625 -56.96875 C 93.765625 -64.945312 91.410156 -71.171875 86.703125 -75.640625 C 82.003906 -80.109375 76.082031 -82.34375 68.9375 -82.34375 C 63.820312 -82.34375 58.734375 -81.03125 53.671875 -78.40625 C 48.609375 -75.789062 44.226562 -71.984375 40.53125 -66.984375 C 36.84375 -61.984375 34.40625 -56.085938 33.21875 -49.296875 C 32.738281 -47.035156 32.5 -44.59375 32.5 -41.96875 C 32.5 -33.988281 34.847656 -27.675781 39.546875 -23.03125 C 44.253906 -18.394531 50.125 -16.078125 57.15625 -16.078125 C 62.394531 -16.078125 67.546875 -17.414062 72.609375 -20.09375 C 77.671875 -22.769531 82.046875 -26.664062 85.734375 -31.78125 C 89.421875 -36.90625 91.863281 -42.863281 93.0625 -49.65625 Z M 93.0625 -49.65625 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(184.292791, 99.089416)"><g><path d="M 6.5 -30.484375 C 5.488281 -30.484375 4.640625 -30.828125 3.953125 -31.515625 C 3.273438 -32.203125 2.9375 -33.050781 2.9375 -34.0625 C 2.9375 -35.0625 3.273438 -35.90625 3.953125 -36.59375 C 4.640625 -37.28125 5.488281 -37.625 6.5 -37.625 C 7.476562 -37.625 8.304688 -37.28125 8.984375 -36.59375 C 9.671875 -35.90625 10.015625 -35.0625 10.015625 -34.0625 C 10.015625 -33.050781 9.671875 -32.203125 8.984375 -31.515625 C 8.304688 -30.828125 7.476562 -30.484375 6.5 -30.484375 Z M 9.234375 -26.921875 L 9.234375 0 L 3.671875 0 L 3.671875 -26.921875 Z M 9.234375 -26.921875 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(197.19149, 99.089416)"><g><path d="M 15.1875 -13.625 L 23.890625 0 L 17.59375 0 L 11.78125 -9.140625 L 6.296875 0 L 0.484375 0 L 9.1875 -13.234375 L 0.484375 -26.921875 L 6.796875 -26.921875 L 12.609375 -17.78125 L 18.078125 -26.921875 L 23.890625 -26.921875 Z M 15.1875 -13.625 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(221.571982, 99.089416)"><g><path d="M 28.34375 -14.125 C 28.34375 -13.113281 28.273438 -12.203125 28.140625 -11.390625 L 7.578125 -11.390625 C 7.734375 -9.234375 8.523438 -7.503906 9.953125 -6.203125 C 11.390625 -4.898438 13.15625 -4.25 15.25 -4.25 C 18.238281 -4.25 20.351562 -5.503906 21.59375 -8.015625 L 27.609375 -8.015625 C 26.796875 -5.535156 25.320312 -3.503906 23.1875 -1.921875 C 21.050781 -0.347656 18.40625 0.4375 15.25 0.4375 C 12.675781 0.4375 10.367188 -0.140625 8.328125 -1.296875 C 6.296875 -2.453125 4.703125 -4.078125 3.546875 -6.171875 C 2.390625 -8.273438 1.8125 -10.710938 1.8125 -13.484375 C 1.8125 -16.253906 2.367188 -18.6875 3.484375 -20.78125 C 4.609375 -22.882812 6.1875 -24.503906 8.21875 -25.640625 C 10.257812 -26.785156 12.601562 -27.359375 15.25 -27.359375 C 17.789062 -27.359375 20.050781 -26.800781 22.03125 -25.6875 C 24.019531 -24.582031 25.566406 -23.03125 26.671875 -21.03125 C 27.785156 -19.03125 28.34375 -16.726562 28.34375 -14.125 Z M 22.53125 -15.875 C 22.488281 -17.925781 21.75 -19.570312 20.3125 -20.8125 C 18.882812 -22.050781 17.113281 -22.671875 15 -22.671875 C 13.070312 -22.671875 11.425781 -22.054688 10.0625 -20.828125 C 8.695312 -19.609375 7.882812 -17.957031 7.625 -15.875 Z M 22.53125 -15.875 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(251.717793, 99.089416)"><g><path d="M 9.234375 -36.15625 L 9.234375 0 L 3.671875 0 L 3.671875 -36.15625 Z M 9.234375 -36.15625 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(184.292791, 153.618938)"><g><path d="M 14.859375 0.34375 C 12.578125 0.34375 10.519531 -0.0507812 8.6875 -0.84375 C 6.863281 -1.644531 5.429688 -2.78125 4.390625 -4.25 C 3.347656 -5.71875 2.828125 -7.425781 2.828125 -9.375 L 8.796875 -9.375 C 8.921875 -7.914062 9.492188 -6.710938 10.515625 -5.765625 C 11.546875 -4.816406 12.992188 -4.34375 14.859375 -4.34375 C 16.773438 -4.34375 18.269531 -4.804688 19.34375 -5.734375 C 20.414062 -6.671875 20.953125 -7.867188 20.953125 -9.328125 C 20.953125 -10.472656 20.617188 -11.398438 19.953125 -12.109375 C 19.285156 -12.828125 18.457031 -13.378906 17.46875 -13.765625 C 16.476562 -14.160156 15.101562 -14.585938 13.34375 -15.046875 C 11.125 -15.628906 9.320312 -16.222656 7.9375 -16.828125 C 6.550781 -17.429688 5.367188 -18.367188 4.390625 -19.640625 C 3.421875 -20.910156 2.9375 -22.601562 2.9375 -24.71875 C 2.9375 -26.675781 3.421875 -28.382812 4.390625 -29.84375 C 5.367188 -31.3125 6.738281 -32.4375 8.5 -33.21875 C 10.257812 -34 12.296875 -34.390625 14.609375 -34.390625 C 17.898438 -34.390625 20.59375 -33.566406 22.6875 -31.921875 C 24.789062 -30.285156 25.957031 -28.03125 26.1875 -25.15625 L 20.03125 -25.15625 C 19.9375 -26.394531 19.347656 -27.453125 18.265625 -28.328125 C 17.191406 -29.210938 15.773438 -29.65625 14.015625 -29.65625 C 12.421875 -29.65625 11.117188 -29.25 10.109375 -28.4375 C 9.097656 -27.625 8.59375 -26.453125 8.59375 -24.921875 C 8.59375 -23.878906 8.910156 -23.019531 9.546875 -22.34375 C 10.179688 -21.675781 10.988281 -21.144531 11.96875 -20.75 C 12.945312 -20.363281 14.285156 -19.945312 15.984375 -19.5 C 18.222656 -18.875 20.050781 -18.25 21.46875 -17.625 C 22.882812 -17.007812 24.085938 -16.054688 25.078125 -14.765625 C 26.078125 -13.484375 26.578125 -11.769531 26.578125 -9.625 C 26.578125 -7.894531 26.113281 -6.265625 25.1875 -4.734375 C 24.257812 -3.203125 22.90625 -1.972656 21.125 -1.046875 C 19.351562 -0.117188 17.265625 0.34375 14.859375 0.34375 Z M 14.859375 0.34375 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(213.803444, 153.618938)"><g><path d="M 10.15625 -22.375 L 10.15625 -7.46875 C 10.15625 -6.457031 10.390625 -5.734375 10.859375 -5.296875 C 11.335938 -4.859375 12.148438 -4.640625 13.296875 -4.640625 L 16.703125 -4.640625 L 16.703125 0 L 12.3125 0 C 9.800781 0 7.878906 -0.582031 6.546875 -1.75 C 5.210938 -2.925781 4.546875 -4.832031 4.546875 -7.46875 L 4.546875 -22.375 L 1.375 -22.375 L 1.375 -26.921875 L 4.546875 -26.921875 L 4.546875 -33.609375 L 10.15625 -33.609375 L 10.15625 -26.921875 L 16.703125 -26.921875 L 16.703125 -22.375 Z M 10.15625 -22.375 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(231.978883, 153.618938)"><g><path d="M 28.046875 -26.921875 L 28.046875 0 L 22.46875 0 L 22.46875 -3.171875 C 21.59375 -2.066406 20.445312 -1.195312 19.03125 -0.5625 C 17.613281 0.0703125 16.109375 0.390625 14.515625 0.390625 C 12.390625 0.390625 10.488281 -0.046875 8.8125 -0.921875 C 7.132812 -1.804688 5.816406 -3.109375 4.859375 -4.828125 C 3.898438 -6.554688 3.421875 -8.644531 3.421875 -11.09375 L 3.421875 -26.921875 L 8.9375 -26.921875 L 8.9375 -11.921875 C 8.9375 -9.515625 9.539062 -7.664062 10.75 -6.375 C 11.957031 -5.09375 13.601562 -4.453125 15.6875 -4.453125 C 17.769531 -4.453125 19.421875 -5.09375 20.640625 -6.375 C 21.859375 -7.664062 22.46875 -9.515625 22.46875 -11.921875 L 22.46875 -26.921875 Z M 28.046875 -26.921875 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(263.688179, 153.618938)"><g><path d="M 1.8125 -13.578125 C 1.8125 -16.285156 2.367188 -18.679688 3.484375 -20.765625 C 4.609375 -22.847656 6.140625 -24.46875 8.078125 -25.625 C 10.023438 -26.78125 12.1875 -27.359375 14.5625 -27.359375 C 16.320312 -27.359375 18.054688 -26.972656 19.765625 -26.203125 C 21.472656 -25.441406 22.832031 -24.425781 23.84375 -23.15625 L 23.84375 -36.15625 L 29.46875 -36.15625 L 29.46875 0 L 23.84375 0 L 23.84375 -4.0625 C 22.925781 -2.75 21.660156 -1.671875 20.046875 -0.828125 C 18.441406 0.015625 16.597656 0.4375 14.515625 0.4375 C 12.171875 0.4375 10.023438 -0.15625 8.078125 -1.34375 C 6.140625 -2.53125 4.609375 -4.191406 3.484375 -6.328125 C 2.367188 -8.460938 1.8125 -10.878906 1.8125 -13.578125 Z M 23.84375 -13.484375 C 23.84375 -15.335938 23.457031 -16.945312 22.6875 -18.3125 C 21.925781 -19.6875 20.925781 -20.734375 19.6875 -21.453125 C 18.445312 -22.171875 17.113281 -22.53125 15.6875 -22.53125 C 14.25 -22.53125 12.910156 -22.175781 11.671875 -21.46875 C 10.441406 -20.769531 9.441406 -19.742188 8.671875 -18.390625 C 7.910156 -17.046875 7.53125 -15.441406 7.53125 -13.578125 C 7.53125 -11.722656 7.910156 -10.09375 8.671875 -8.6875 C 9.441406 -7.289062 10.453125 -6.222656 11.703125 -5.484375 C 12.953125 -4.753906 14.28125 -4.390625 15.6875 -4.390625 C 17.113281 -4.390625 18.445312 -4.75 19.6875 -5.46875 C 20.925781 -6.1875 21.925781 -7.238281 22.6875 -8.625 C 23.457031 -10.007812 23.84375 -11.628906 23.84375 -13.484375 Z M 23.84375 -13.484375 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(296.814369, 153.618938)"><g><path d="M 6.5 -30.484375 C 5.488281 -30.484375 4.640625 -30.828125 3.953125 -31.515625 C 3.273438 -32.203125 2.9375 -33.050781 2.9375 -34.0625 C 2.9375 -35.0625 3.273438 -35.90625 3.953125 -36.59375 C 4.640625 -37.28125 5.488281 -37.625 6.5 -37.625 C 7.476562 -37.625 8.304688 -37.28125 8.984375 -36.59375 C 9.671875 -35.90625 10.015625 -35.0625 10.015625 -34.0625 C 10.015625 -33.050781 9.671875 -32.203125 8.984375 -31.515625 C 8.304688 -30.828125 7.476562 -30.484375 6.5 -30.484375 Z M 9.234375 -26.921875 L 9.234375 0 L 3.671875 0 L 3.671875 -26.921875 Z M 9.234375 -26.921875 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(309.713068, 153.618938)"><g><path d="M 15.34375 0.4375 C 12.800781 0.4375 10.503906 -0.140625 8.453125 -1.296875 C 6.398438 -2.453125 4.785156 -4.078125 3.609375 -6.171875 C 2.441406 -8.273438 1.859375 -10.710938 1.859375 -13.484375 C 1.859375 -16.222656 2.457031 -18.648438 3.65625 -20.765625 C 4.863281 -22.878906 6.507812 -24.503906 8.59375 -25.640625 C 10.675781 -26.785156 13.007812 -27.359375 15.59375 -27.359375 C 18.164062 -27.359375 20.492188 -26.785156 22.578125 -25.640625 C 24.660156 -24.503906 26.300781 -22.878906 27.5 -20.765625 C 28.707031 -18.648438 29.3125 -16.222656 29.3125 -13.484375 C 29.3125 -10.742188 28.691406 -8.316406 27.453125 -6.203125 C 26.222656 -4.085938 24.539062 -2.453125 22.40625 -1.296875 C 20.269531 -0.140625 17.914062 0.4375 15.34375 0.4375 Z M 15.34375 -4.390625 C 16.769531 -4.390625 18.109375 -4.734375 19.359375 -5.421875 C 20.617188 -6.109375 21.640625 -7.132812 22.421875 -8.5 C 23.203125 -9.863281 23.59375 -11.523438 23.59375 -13.484375 C 23.59375 -15.441406 23.21875 -17.09375 22.46875 -18.4375 C 21.71875 -19.789062 20.722656 -20.8125 19.484375 -21.5 C 18.253906 -22.1875 16.921875 -22.53125 15.484375 -22.53125 C 14.054688 -22.53125 12.726562 -22.1875 11.5 -21.5 C 10.28125 -20.8125 9.3125 -19.789062 8.59375 -18.4375 C 7.882812 -17.09375 7.53125 -15.441406 7.53125 -13.484375 C 7.53125 -10.585938 8.269531 -8.347656 9.75 -6.765625 C 11.226562 -5.179688 13.09375 -4.390625 15.34375 -4.390625 Z M 15.34375 -4.390625 "/></g></g></g></svg>
                </div>
                <ul class="space-y-6 mx-4">
                    <li>
                        <a href="" class="flex items-center space-x-4 py-2 px-5 rounded-md hover:bg-primary">
                            <svg width="28" height="28" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.9209 7.08072H10.1023C8.7 7.08072 8.02326 6.47647 8.02326 5.2433V2.75228C8.02326 1.51295 8.70698 0.914856 10.1023 0.914856H12.9209C14.3233 0.914856 15 1.51911 15 2.75228V5.2433C15 6.47647 14.3163 7.08072 12.9209 7.08072ZM10.1023 1.83974C9.27907 1.83974 9.06977 2.02471 9.06977 2.75228V5.2433C9.06977 5.97087 9.27907 6.15584 10.1023 6.15584H12.9209C13.7442 6.15584 13.9535 5.97087 13.9535 5.2433V2.75228C13.9535 2.02471 13.7442 1.83974 12.9209 1.83974H10.1023V1.83974ZM4.89767 7.08072H2.07907C0.676744 7.08072 0 6.53196 0 5.39744V2.59814C0 1.46362 0.683721 0.914856 2.07907 0.914856H4.89767C6.3 0.914856 6.97674 1.46362 6.97674 2.59814V5.39128C6.97674 6.53196 6.29302 7.08072 4.89767 7.08072ZM2.07907 1.83974C1.14419 1.83974 1.04651 2.07404 1.04651 2.59814V5.39128C1.04651 5.92154 1.14419 6.14968 2.07907 6.14968H4.89767C5.83256 6.14968 5.93023 5.91538 5.93023 5.39128V2.59814C5.93023 2.06787 5.83256 1.83974 4.89767 1.83974H2.07907V1.83974ZM4.89767 14.1715H2.07907C0.676744 14.1715 0 13.5672 0 12.334V9.84303C0 8.60369 0.683721 8.0056 2.07907 8.0056H4.89767C6.3 8.0056 6.97674 8.60986 6.97674 9.84303V12.334C6.97674 13.5672 6.29302 14.1715 4.89767 14.1715ZM2.07907 8.93048C1.25581 8.93048 1.04651 9.11546 1.04651 9.84303V12.334C1.04651 13.0616 1.25581 13.2466 2.07907 13.2466H4.89767C5.72093 13.2466 5.93023 13.0616 5.93023 12.334V9.84303C5.93023 9.11546 5.72093 8.93048 4.89767 8.93048H2.07907V8.93048ZM13.7791 10.1637H9.59302C9.30698 10.1637 9.06977 9.95402 9.06977 9.70122C9.06977 9.44842 9.30698 9.23878 9.59302 9.23878H13.7791C14.0651 9.23878 14.3023 9.44842 14.3023 9.70122C14.3023 9.95402 14.0651 10.1637 13.7791 10.1637ZM13.7791 12.63H9.59302C9.30698 12.63 9.06977 12.4204 9.06977 12.1676C9.06977 11.9148 9.30698 11.7051 9.59302 11.7051H13.7791C14.0651 11.7051 14.3023 11.9148 14.3023 12.1676C14.3023 12.4204 14.0651 12.63 13.7791 12.63Z" fill="black"/>
                            </svg>                                
                            <span>Studio</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center space-x-4 py-2 px-5 rounded-md hover:bg-primary">
                            <svg width="28" height="28" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_135_33)">
                                <path d="M5.72459 7.03293H5.67459C5.63735 7.02739 5.59933 7.02739 5.56209 7.03293C3.74959 6.98321 2.38084 5.72383 2.38084 4.17171C2.38084 2.59196 3.83709 1.30496 5.62459 1.30496C7.41209 1.30496 8.86834 2.59196 8.86834 4.17171C8.86209 5.72383 7.48709 6.98321 5.74334 7.03293H5.72459V7.03293ZM5.62459 2.1335C5.01344 2.13496 4.4278 2.35017 3.99565 2.73209C3.5635 3.11401 3.31999 3.63159 3.31834 4.17171C3.31834 5.27642 4.29334 6.16572 5.53709 6.20439C5.57459 6.19886 5.65584 6.19886 5.73709 6.20439C6.96209 6.15467 7.92459 5.26538 7.93084 4.17171C7.92919 3.63159 7.68568 3.11401 7.25353 2.73209C6.82138 2.35017 6.23574 2.13496 5.62459 2.1335V2.1335ZM10.3365 7.10473C10.3177 7.10473 10.299 7.10473 10.2802 7.09921C10.024 7.1213 9.76146 6.96112 9.73646 6.73465C9.71146 6.50818 9.86771 6.30381 10.124 6.27619C10.199 6.27067 10.2802 6.27067 10.349 6.27067C11.2615 6.22648 11.974 5.56365 11.974 4.75168C11.974 3.9121 11.2052 3.2327 10.2552 3.2327C10.194 3.23343 10.1331 3.22339 10.0763 3.20318C10.0195 3.18297 9.96774 3.15298 9.92413 3.11495C9.88052 3.07692 9.84589 3.03161 9.82226 2.98166C9.79863 2.9317 9.78646 2.87809 9.78646 2.82395C9.78646 2.59748 9.99897 2.40968 10.2552 2.40968C10.9592 2.41114 11.6339 2.65894 12.1316 3.09887C12.6294 3.5388 12.9098 4.13505 12.9115 4.75721C12.9115 6.02763 11.7865 7.05502 10.3552 7.10473H10.3365ZM5.73271 13.0702C4.50771 13.0702 3.27646 12.794 2.34521 12.2417C1.47646 11.7335 1.00146 11.0375 1.00146 10.2808C1.00146 9.52406 1.47646 8.82257 2.34521 8.30888C4.22021 7.20968 7.25771 7.20968 9.12021 8.30888C9.98271 8.81705 10.464 9.51302 10.464 10.2697C10.464 11.0265 9.98896 11.728 9.12021 12.2417C8.18271 12.794 6.95771 13.0702 5.73271 13.0702ZM2.86396 9.00485C2.26396 9.35836 1.93896 9.81129 1.93896 10.2863C1.93896 10.7558 2.27021 11.2088 2.86396 11.5567C4.42021 12.4792 7.04521 12.4792 8.60146 11.5567C9.20146 11.2032 9.52646 10.7503 9.52646 10.2753C9.52646 9.80577 9.19521 9.35283 8.60146 9.00485C7.04521 8.08793 4.42021 8.08793 2.86396 9.00485ZM11.4615 12.076C11.2427 12.076 11.049 11.9434 11.0052 11.7445C10.981 11.637 11.0054 11.5253 11.0731 11.4335C11.1409 11.3416 11.2466 11.2768 11.3677 11.2529C11.7615 11.1811 12.124 11.0431 12.4052 10.8497C12.7615 10.6122 12.9552 10.3139 12.9552 9.99909C12.9552 9.68425 12.7615 9.38597 12.4115 9.15398C12.1365 8.96618 11.7927 8.83362 11.3865 8.75076C11.2649 8.72623 11.1592 8.6602 11.0924 8.56708C11.0257 8.47395 11.0033 8.36128 11.0302 8.25364C11.0865 8.0327 11.3365 7.88908 11.5927 7.93879C12.1302 8.04374 12.599 8.23154 12.9802 8.49115C13.5615 8.8778 13.8927 9.42464 13.8927 9.99909C13.8927 10.5735 13.5552 11.1204 12.974 11.5126C12.5865 11.7777 12.099 11.971 11.5615 12.0649C11.524 12.076 11.4927 12.076 11.4615 12.076V12.076Z" fill="black"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_135_33">
                                <rect width="15" height="13.2566" fill="white" transform="translate(0 0.614502)"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <span>Pengguna</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center space-x-4 py-2 px-5 rounded-md hover:bg-primary">
                            <svg width="28" height="28" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_136_4)">
                                <path d="M11.875 5.37975C10.5813 5.37975 9.53125 4.45179 9.53125 3.30841C9.53125 2.16502 10.5813 1.23706 11.875 1.23706C13.1687 1.23706 14.2188 2.16502 14.2188 3.30841C14.2188 4.45179 13.1687 5.37975 11.875 5.37975ZM11.875 2.0656C11.1 2.0656 10.4688 2.62348 10.4688 3.30841C10.4688 3.99333 11.1 4.55121 11.875 4.55121C12.65 4.55121 13.2812 3.99333 13.2812 3.30841C13.2812 2.62348 12.65 2.0656 11.875 2.0656ZM7.5 8.14155H4.375C4.11875 8.14155 3.90625 7.95375 3.90625 7.72728C3.90625 7.50081 4.11875 7.31301 4.375 7.31301H7.5C7.75625 7.31301 7.96875 7.50081 7.96875 7.72728C7.96875 7.95375 7.75625 8.14155 7.5 8.14155ZM10 10.351H4.375C4.11875 10.351 3.90625 10.1632 3.90625 9.93672C3.90625 9.71025 4.11875 9.52245 4.375 9.52245H10C10.2562 9.52245 10.4688 9.71025 10.4688 9.93672C10.4688 10.1632 10.2562 10.351 10 10.351Z" fill="black"/>
                                <path d="M9.375 13.1128H5.625C2.23125 13.1128 0.78125 11.8313 0.78125 8.832V5.51784C0.78125 2.51853 2.23125 1.23706 5.625 1.23706H8.75C9.00625 1.23706 9.21875 1.42486 9.21875 1.65133C9.21875 1.8778 9.00625 2.0656 8.75 2.0656H5.625C2.74375 2.0656 1.71875 2.97147 1.71875 5.51784V8.832C1.71875 11.3784 2.74375 12.2842 5.625 12.2842H9.375C12.2563 12.2842 13.2812 11.3784 13.2812 8.832V6.0702C13.2812 5.84373 13.4938 5.65593 13.75 5.65593C14.0062 5.65593 14.2188 5.84373 14.2188 6.0702V8.832C14.2188 11.8313 12.7687 13.1128 9.375 13.1128Z" fill="black"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_136_4">
                                <rect width="15" height="13.2566" fill="white" transform="translate(0 0.5466)"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <span>Paket Foto</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center space-x-4 py-2 px-5 rounded-md hover:bg-primary">
                            <svg width="28" height="28" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.375 13.4637H5.625C2.23125 13.4637 0.78125 12.1823 0.78125 9.18296V5.86881C0.78125 2.8695 2.23125 1.58803 5.625 1.58803H9.375C12.7687 1.58803 14.2188 2.8695 14.2188 5.86881V9.18296C14.2188 12.1823 12.7687 13.4637 9.375 13.4637ZM5.625 2.41657C2.74375 2.41657 1.71875 3.32244 1.71875 5.86881V9.18296C1.71875 11.7293 2.74375 12.6352 5.625 12.6352H9.375C12.2563 12.6352 13.2812 11.7293 13.2812 9.18296V5.86881C13.2812 3.32244 12.2563 2.41657 9.375 2.41657H5.625Z" fill="black"/>
                                <path d="M9.6875 11.5305C8.7375 11.5305 7.96875 10.8511 7.96875 10.0115V5.04027C7.96875 4.20069 8.7375 3.52129 9.6875 3.52129C10.6375 3.52129 11.4062 4.20069 11.4062 5.04027V10.0115C11.4062 10.8511 10.6375 11.5305 9.6875 11.5305ZM9.6875 4.34982C9.25625 4.34982 8.90625 4.65915 8.90625 5.04027V10.0115C8.90625 10.1946 8.98856 10.3702 9.13507 10.4997C9.28159 10.6292 9.4803 10.702 9.6875 10.702C9.8947 10.702 10.0934 10.6292 10.2399 10.4997C10.3864 10.3702 10.4688 10.1946 10.4688 10.0115V5.04027C10.4688 4.65915 10.1187 4.34982 9.6875 4.34982ZM5.3125 11.5305C4.3625 11.5305 3.59375 10.8511 3.59375 10.0115V8.07825C3.59375 7.23866 4.3625 6.55926 5.3125 6.55926C6.2625 6.55926 7.03125 7.23866 7.03125 8.07825V10.0115C7.03125 10.8511 6.2625 11.5305 5.3125 11.5305ZM5.3125 7.3878C4.88125 7.3878 4.53125 7.69712 4.53125 8.07825V10.0115C4.53125 10.1946 4.61356 10.3702 4.76007 10.4997C4.90659 10.6292 5.1053 10.702 5.3125 10.702C5.5197 10.702 5.71841 10.6292 5.86493 10.4997C6.01144 10.3702 6.09375 10.1946 6.09375 10.0115V8.07825C6.09375 7.69712 5.74375 7.3878 5.3125 7.3878Z" fill="black"/>
                            </svg>
                            <span>Booking</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center space-x-4 py-2 px-5 rounded-md hover:bg-primary">
                            <svg width="28" height="28" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.5 8.94822C6.20625 8.94822 5.15625 8.02026 5.15625 6.87687C5.15625 5.73349 6.20625 4.80553 7.5 4.80553C8.79375 4.80553 9.84375 5.73349 9.84375 6.87687C9.84375 8.02026 8.79375 8.94822 7.5 8.94822ZM7.5 5.63407C6.725 5.63407 6.09375 6.19195 6.09375 6.87687C6.09375 7.5618 6.725 8.11968 7.5 8.11968C8.275 8.11968 8.90625 7.5618 8.90625 6.87687C8.90625 6.19195 8.275 5.63407 7.5 5.63407Z" fill="black"/>
                                <path d="M9.50625 12.5054C9.375 12.5054 9.24375 12.4888 9.1125 12.4612C8.725 12.3673 8.4 12.1519 8.19375 11.8481L8.11875 11.7376C7.75 11.1742 7.24375 11.1742 6.875 11.7376L6.80625 11.8426C6.6 12.1519 6.275 12.3728 5.8875 12.4612C5.49375 12.5551 5.0875 12.5054 4.74375 12.3231L3.66875 11.7763C3.47986 11.6806 3.31416 11.553 3.18113 11.4007C3.0481 11.2484 2.95034 11.0745 2.89345 10.8887C2.83657 10.703 2.82166 10.5092 2.8496 10.3184C2.87753 10.1276 2.94775 9.94356 3.05625 9.77676C3.2375 9.49506 3.2875 9.24097 3.18125 9.08079C3.075 8.9206 2.80625 8.8267 2.4375 8.8267C1.525 8.8267 0.78125 8.16939 0.78125 7.36295V6.3908C0.78125 5.58435 1.525 4.92705 2.4375 4.92705C2.80625 4.92705 3.075 4.83315 3.18125 4.67296C3.2875 4.51278 3.24375 4.25869 3.05625 3.97699C2.8375 3.64005 2.78125 3.24235 2.89375 2.86675C3.00625 2.48562 3.28125 2.17077 3.66875 1.97745L4.75 1.43061C5.45625 1.06053 6.3875 1.27595 6.8125 1.91117L6.8875 2.02164C7.25625 2.58504 7.7625 2.58504 8.13125 2.02164L8.2 1.91669C8.625 1.27595 9.55625 1.06053 10.2688 1.43614L11.3437 1.98297C11.5326 2.07862 11.6983 2.20624 11.8314 2.35854C11.9644 2.51083 12.0622 2.68481 12.119 2.87052C12.1759 3.05623 12.1908 3.25003 12.1629 3.44084C12.135 3.63164 12.0647 3.81571 11.9562 3.98251C11.775 4.26422 11.725 4.5183 11.8313 4.67848C11.9375 4.83867 12.2063 4.93257 12.575 4.93257C13.4875 4.93257 14.2313 5.58988 14.2313 6.39632V7.36847C14.2313 8.17492 13.4875 8.83222 12.575 8.83222C12.2063 8.83222 11.9375 8.92613 11.8313 9.08631C11.725 9.24649 11.7687 9.50058 11.9562 9.78228C12.175 10.1192 12.2375 10.5169 12.1187 10.8925C12.0644 11.0794 11.9677 11.2546 11.8345 11.4074C11.7013 11.5603 11.5343 11.6877 11.3437 11.7818L10.2625 12.3287C10.025 12.4447 9.76875 12.5054 9.50625 12.5054V12.5054ZM7.5 10.4617C8.05625 10.4617 8.575 10.771 8.93125 11.3178L9 11.4228C9.075 11.5388 9.2 11.6216 9.35 11.6548C9.5 11.6879 9.65 11.6713 9.775 11.6051L10.8563 11.0527C11.0213 10.9686 11.1421 10.8303 11.1924 10.6679C11.2427 10.5056 11.2185 10.3322 11.125 10.1855C10.7687 9.64419 10.725 9.08631 11 8.66099C11.275 8.23568 11.8438 7.99264 12.5563 7.99264C12.9563 7.99264 13.275 7.71094 13.275 7.35743V6.38527C13.275 6.03729 12.9563 5.75006 12.5563 5.75006C11.8438 5.75006 11.275 5.50702 11 5.08171C10.725 4.65639 10.7687 4.09851 11.125 3.5572C11.2187 3.41358 11.2437 3.24235 11.1937 3.07664C11.1437 2.91094 11.025 2.77837 10.8625 2.68999L9.78125 2.14316C9.71602 2.10935 9.64389 2.08725 9.56898 2.07812C9.49408 2.06899 9.41787 2.073 9.34472 2.08993C9.27157 2.10686 9.20292 2.13638 9.14269 2.17679C9.08247 2.2172 9.03186 2.26771 8.99375 2.32543L8.925 2.43038C8.56875 2.97722 8.05 3.28654 7.49375 3.28654C6.9375 3.28654 6.41875 2.97722 6.0625 2.43038L5.99375 2.31991C5.91608 2.20703 5.79163 2.12539 5.64688 2.09238C5.50214 2.05937 5.34853 2.07758 5.21875 2.14316L4.1375 2.69552C3.97249 2.77964 3.8517 2.91791 3.80138 3.08028C3.75105 3.24266 3.77527 3.41603 3.86875 3.56272C4.225 4.10403 4.26875 4.66191 3.99375 5.08723C3.71875 5.51255 3.15 5.75558 2.4375 5.75558C2.0375 5.75558 1.71875 6.03729 1.71875 6.3908V7.36295C1.71875 7.71094 2.0375 7.99816 2.4375 7.99816C3.15 7.99816 3.71875 8.2412 3.99375 8.66652C4.26875 9.09183 4.225 9.64972 3.86875 10.191C3.775 10.3346 3.75 10.5059 3.8 10.6716C3.85 10.8373 3.96875 10.9699 4.13125 11.0582L5.2125 11.6051C5.34375 11.6769 5.5 11.6934 5.64375 11.6603C5.79375 11.6272 5.91875 11.5388 6 11.4228L6.06875 11.3178C6.425 10.7765 6.94375 10.4617 7.5 10.4617Z" fill="black"/>
                            </svg>
                            <span>Pengaturan</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-10">

            </div>
        </div>
        <div class="mb-4">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="mx-6">
                    <span>
                        <svg
                        class="fill-current h-8 w-8 text-red-500 mx-auto hover:text-red-500"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                            d="M13 4.00894C13.0002 3.45665 12.5527 3.00876 12.0004 3.00854C11.4481 3.00833 11.0002 3.45587 11 4.00815L10.9968 12.0116C10.9966 12.5639 11.4442 13.0118 11.9965 13.012C12.5487 13.0122 12.9966 12.5647 12.9968 12.0124L13 4.00894Z"
                            fill="currentColor"
                        />
                        <path
                            d="M4 12.9917C4 10.7826 4.89541 8.7826 6.34308 7.33488L7.7573 8.7491C6.67155 9.83488 6 11.3349 6 12.9917C6 16.3054 8.68629 18.9917 12 18.9917C15.3137 18.9917 18 16.3054 18 12.9917C18 11.3348 17.3284 9.83482 16.2426 8.74903L17.6568 7.33481C19.1046 8.78253 20 10.7825 20 12.9917C20 17.41 16.4183 20.9917 12 20.9917C7.58172 20.9917 4 17.41 4 12.9917Z"
                            fill="currentColor"
                        />
                        </svg>
                </span>
                </button>
            </form>
        </div>
        </nav>
        {{-- end siebar admin --}}

        {{-- main edit --}}
        <div class="flex justify-center bg-primary items-center h-screen w-screen">
            <div class="flex items-center h-full w-full justify-center">
                <div class="px-10 py-12 bg-neutral">
                    <h1 class="text-md text-center font-semibold mb-10">EDIT DATA STUDIO</h1>
                    <div>
                        <form action="{{ Route('update.studio',$studio->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="username" class="block text-sm mb-1" >Nama Studio</label>
                            <input
                            type="text" name="nama_studio"
                            value= "{{ $studio->nama_studio }}"
                            class="rounded border-2 bg-gray-200 py-2 px-3 mb-2 w-full text-sm">
                            <label for="Ruangan" class="block text-sm mb-1">Ruangan</label>
                            <input
                            type="text" name="ruangan_studio"
                            value= "{{ $studio->ruangan_studio }}"
                            class="rounded border-2 bg-gray-200 py-2 px-3 w-full text-sm">
                            <label for="deskripsi" class="block text-secondary text-sm mb-2">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi_studio" class="w-full bg-gray-200 py-1.5 px-2 text-sm rounded-md text-secondary">{{ $studio->deskripsi_studio }}</textarea>
                            <label class="text-secondary text-sm block">Gambar</label>
                            <input type="file" name="foto" class="text-sm bg-white w-full">
                            <input type="hidden" name="fotoLama" value="{{ $studio->foto }}">
                            <button class="bg-secondary text-sm  text-neutral mt-6 mb-7 w-full py-2 px-3 rounded">Edit Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- end main edit --}}
        
</body>
</html>