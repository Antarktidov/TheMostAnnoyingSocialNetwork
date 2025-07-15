const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
const addReactionSelectorAll = document.querySelectorAll('.add-reaction');

for (let i = 0; i < addReactionSelectorAll.length; i++) {
    addReactionSelectorAll[i].addEventListener('click', function() {
        const postId = this.getAttribute('data-post-id');
        const reactionType = this.getAttribute('data-reaction-type');

        const reactionCount = document.querySelector(`[data-post-id="${postId}"][data-reaction-type="${reactionType}"] .fw-bold`);
        reactionCount.textContent = parseInt(reactionCount.textContent) + 1;

        fetch(`/${postId}/add-reaction`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ reaction_type: reactionType }),
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
        });
    });
}