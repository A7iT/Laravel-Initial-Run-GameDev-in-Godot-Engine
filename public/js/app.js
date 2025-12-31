let progress = 0;

function showSection(id) {
    document.querySelectorAll('.panel').forEach(p => p.classList.add('hidden'));
    document.getElementById(id).classList.remove('hidden');
}

function increaseProgress() {
    if (progress < 100) {
        progress += 10;
        document.getElementById('progress').style.width = progress + '%';
        document.getElementById('progressText').innerText = 'Progress: ' + progress + '%';
    }
}

function toggleStep(el) {
    el.classList.toggle('done');
}
