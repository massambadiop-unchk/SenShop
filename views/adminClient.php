

<div class="ss-admin-messages-page">

    <!-- HEADER -->

    <div class="ss-messages-header">

        <div>

            <h1>Messages Clients</h1>

            <p>
                Consultez les messages reçus depuis la page contact.
            </p>

        </div>

        <button class="ss-message-refresh-btn">

            <i class="fa-solid fa-rotate"></i>

            Actualiser

        </button>

    </div>

    <!-- STATS -->

    <div class="ss-message-stats-grid">

        <!-- CARD -->

    </div>

    <!-- CARD -->

    <div class="ss-messages-card">

        <!-- FILTER -->

        <div class="ss-messages-filter-bar">

            <!-- SEARCH -->

            <div class="ss-messages-search-box">

                <i class="fa-solid fa-magnifying-glass"></i>

                <input type="text"
                placeholder="Rechercher un message...">

            </div>

            <!-- SELECT -->

            <select>

                <option>Tous les messages</option>

                <option>Non lus</option>

                <option>Traités</option>

            </select>

            <!-- BUTTON -->

            <button class="ss-reset-message-btn">

                <i class="fa-solid fa-rotate-left"></i>

                Réinitialiser

            </button>

        </div>

        <!-- TABLE -->

        <div class="ss-messages-table-wrapper">

            <table class="ss-messages-table">

                <thead>

                    <tr>

                        <th>Nom complet</th>

                        <th>Adresse mail</th>

                        <th>Téléphone</th>

                        <th>Sujet</th>

                        <th>Message</th>

                        <th>Date</th>

                        <th>Actions</th>

                    </tr>

                </thead>

                <tbody>
<?php if(empty($messages)): ?>
    <tr><td colspan="7" style="text-align:center; padding:40px; color:#9ca3af;">Aucun message reçu.</td></tr>
<?php else: ?>
    <?php foreach($messages as $m): ?>
    <tr>
        <td>
            <div class="ss-message-user">
                <div class="ss-message-avatar"><?= strtoupper(mb_substr($m->nom, 0, 1)) ?></div>
                <div><h4><?= htmlspecialchars($m->nom) ?></h4><p>Client</p></div>
            </div>
        </td>
        <td><?= htmlspecialchars($m->email) ?></td>
        <td><?= htmlspecialchars($m->telephone) ?></td>
        <td><?= htmlspecialchars($m->sujet) ?></td>
        <td><?= htmlspecialchars(mb_substr($m->message, 0, 60)) ?>...</td>
        <td><?= date("d M Y", strtotime($m->date_envoi)) ?></td>
        <td>
            <a href="?site=adminClient&delete=<?= $m->id ?>" onclick="return confirm('Supprimer ?')">
                <button class="ss-message-btn ss-delete-btn"><i class="fa-solid fa-trash"></i></button>
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
<?php endif; ?>
                </tbody>

            </table>

        </div>

        <!-- FOOTER -->

        <div class="ss-messages-footer">

            <p>
                Affichage de 1 à 2 sur 128 messages
            </p>

            <!-- PAGINATION -->

            <div class="ss-messages-pagination">

                <button>

                    <i class="fa-solid fa-chevron-left"></i>

                </button>

                <button class="active">1</button>

                <button>2</button>

                <button>3</button>

                <button>

                    <i class="fa-solid fa-chevron-right"></i>

                </button>

            </div>

        </div>

    </div>

</div>
