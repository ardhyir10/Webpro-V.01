document.addEventListener('DOMContentLoaded', function() {
    const members = [
        { name: 'Yuko Oshima', role: 'Team K' },
        { name: 'Atsuko Maeda', role: 'Team A' },
        { name: 'Haruna Kojima', role: 'Team A' },
        { name: 'Minami Takahashi', role: 'Team A' }
    ];

    const memberList = document.getElementById('member-list');

    members.forEach(member => {
        const li = document.createElement('li');
        li.textContent = `${member.name} - ${member.role}`;
        memberList.appendChild(li);
    });
});