@extends('layouts.app')

@section('title', 'Godot GameDev Hub')

@section('content')

<section class="hero">
    <h1>Godot GameDev Hub</h1>
    <p>One-page interactive guide for learning game development with Godot.</p>
    <button onclick="showSection('engine')">Explore Engine</button>
    <button onclick="showSection('tools')">Dev Tools</button>
    <button onclick="showSection('roadmap')">Learning Roadmap</button>
</section>

<section id="engine" class="panel hidden">
    <h2>Why Godot?</h2>
    <ul>
        <li>Open-source & lightweight</li>
        <li>GDScript (Python-like)</li>
        <li>2D & 3D support</li>
    </ul>
</section>

<section id="tools" class="panel hidden">
    <h2>GameDev Tools</h2>
    <button onclick="increaseProgress()">Build Game</button>

    <div class="progress-box">
        <div id="progress" class="progress-bar"></div>
    </div>

    <p id="progressText">Progress: 0%</p>
</section>

<section id="roadmap" class="panel hidden">
    <h2>Learning Roadmap</h2>

    <div class="roadmap-step" onclick="toggleStep(this)">
        Learn GDScript
        <span>✔</span>
    </div>

    <div class="roadmap-step" onclick="toggleStep(this)">
        Master Nodes & Scenes
        <span>✔</span>
    </div>

    <div class="roadmap-step" onclick="toggleStep(this)">
        Build First Game
        <span>✔</span>
    </div>
</section>

@endsection
