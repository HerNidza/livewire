document.querySelectorAll('[wire\\:snapshot]').forEach(el => {
    el.__livewire = JSON.parse(el.getAttribute('wire:snapshot'));
    initWireClick(el);
});

function initWireClick(el) {
    el.addEventListener('click', function (e) {
        if (!e.target.hasAttribute('wire:click')) return;

        let method = e.target.getAttribute('wire:click');

        sendRequest(el , {
            callMethod: method
        });
    })
}

function sendRequest (el, addToPayload) {
    let snapshot = el.__livewire;
    let _csrf = document.querySelector('meta[name="_csrf"]').getAttribute('content');

    fetch('/livewire', {
        method: 'POST',
        headers:  {'Content-Type': 'application/json'},
        body: JSON.stringify({
            _token: _csrf,
            snapshot,
            ...addToPayload
        })
    }).then(i => i.json()).then(response => {
       let {html, snapshot} = response;
       el.__livewire = snapshot;

       Alpine.morph(el.firstElementChild, html);
    })
}
