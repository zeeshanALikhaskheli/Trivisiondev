@extends('layout.layout')

@section('contents')
<section class="banner" style="background-color: rgb(89, 129, 170);height:20px">
    <h1 class="fw-bold" style="text-align: center;color:black">Website Performance</h1>
</section>

<div class="container py-5 text-center">
    <h2>Analytics for <a href="{{ $url }}">{{ $url }} </a></h2>

    <div class="row justify-content-center">
        <!-- Performance Score -->
        <div class="col-md-4">
            <div class="progress-circle" data-score="{{ is_numeric($performanceScore) ? $performanceScore * 100 : 0 }}" data-label="Performance"></div>
        </div>
        
        <!-- SEO Score -->
        <div class="col-md-4">
            <div class="progress-circle" data-score="{{ is_numeric($seoScore) ? $seoScore * 100 : 0 }}" data-label="SEO"></div>
        </div>
        
        <!-- Best Practices Score -->
        <div class="col-md-4">
            <div class="progress-circle" data-score="{{ is_numeric($bestPracticesScore) ? $bestPracticesScore * 100 : 0 }}" data-label="Best Practices"></div>
        </div>
    </div>

    <a href="{{ route('analytics.index') }}" class="btn btn-primary">Check Another</a>
</div>

<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.progress-circle').forEach(function (circle) {
            let score = parseInt(circle.getAttribute('data-score'));
            let label = circle.getAttribute('data-label');

            // Determine color based on score
            let color = score >= 80 ? 'green' : score >= 50 ? 'orange' : 'red';

            // Create Canvas Element
            let canvas = document.createElement('canvas');
            canvas.width = 150;
            canvas.height = 150;
            circle.appendChild(canvas);

            let ctx = canvas.getContext('2d');

            // Draw Background Circle
            ctx.lineWidth = 10;
            ctx.strokeStyle = "#e0e0e0"; // Grey Background
            ctx.beginPath();
            ctx.arc(75, 75, 60, 0, 2 * Math.PI);
            ctx.stroke();

            // Draw Progress Circle (Animated)
            let startAngle = -0.5 * Math.PI;
            let endAngle = startAngle + (score / 100) * 2 * Math.PI;
            let progress = 0;
            let step = score / 100 * 2 * Math.PI / 50;

            function animateCircle() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                // Redraw background
                ctx.lineWidth = 10;
                ctx.strokeStyle = "#e0e0e0";
                ctx.beginPath();
                ctx.arc(75, 75, 60, 0, 2 * Math.PI);
                ctx.stroke();

                // Draw Progress
                ctx.lineWidth = 10;
                ctx.strokeStyle = color;
                ctx.beginPath();
                ctx.arc(75, 75, 60, startAngle, startAngle + progress);
                ctx.stroke();

                if (progress < (endAngle - startAngle)) {
                    progress += step;
                    requestAnimationFrame(animateCircle);
                } else {
                    // Draw Final Score Text
                    ctx.fillStyle = "black";
                    ctx.font = "16px Arial";
                    ctx.textAlign = "center";
                    ctx.fillText(score + "%", 75, 80);
                    ctx.fillText(label, 75, 100);
                }
            }

            animateCircle();
        });
    });
</script>

<style>
    .progress-circle {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px auto;
        padding: 18px;
    }
</style>

@endsection
