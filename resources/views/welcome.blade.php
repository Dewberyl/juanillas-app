<x-layout>
    <x-slot name="heading">
        <h1>Welcome here {{ $name ?? 'Partner' }}</h1>
    </x-slot>

    <style>
        .page {
            background-color: #0f172a;
            color: #f8fafc;
            font-family: 'Inter', -apple-system, sans-serif;
            display: flex;
            min-height: 100vh;
        }

        .sidebar-accent {
            width: 8px;
            background: linear-gradient(to bottom, #38bdf8, #818cf8);
        }

        .main-content {
            padding: 80px 10%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .date-label {
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .hero-title {
            font-size: clamp(2.5rem, 8vw, 4.5rem);
            line-height: 1.1;
            margin: 0;
            font-weight: 800;
        }

        .user-name {
            color: #38bdf8;
        }

        .description {
            margin-top: 24px;
            font-size: 1.25rem;
            color: #94a3b8;
            max-width: 500px;
            line-height: 1.6;
        }

        .action-link {
            margin-top: 40px;
            color: #f8fafc;
            text-decoration: none;
        }
    </style>

    <div class="page">
        <div class="sidebar-accent"></div>

        <main class="main-content">
            <div class="date-label">Project: Juanillas App</div>

            <h1 class="hero-title">
                Glad you're back,<br>
                <span class="user-name">{{ $name ?? 'Partner' }}</span>.
            </h1>

            <p class="description">
                Your environment is synchronized and ready for the next deployment.
                All systems are currently performing at peak efficiency.
            </p>

            <a href="#" class="action-link">Enter Dashboard →</a>
        </main>
    </div>

</x-layout>