#!/usr/bin/env bash
#
# Script di deploy per giovannimelfi.it su CloudPanel.
# Può essere usato sia come "Deployment Script" di CloudPanel
# sia eseguito a mano via SSH dentro la document root del sito.
#
# Il sito è PHP "statico" (solo template/include), quindi non c'è build:
# basta allineare la working tree al branch remoto.

set -euo pipefail

# Vai nella cartella dello script (= document root del sito)
cd "$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

BRANCH="${DEPLOY_BRANCH:-main}"

echo "==> Deploy giovannimelfi.it (branch: $BRANCH)"

git fetch --prune origin
git reset --hard "origin/${BRANCH}"
git clean -fd -e .env -e .user.ini

echo "==> Deploy completato: $(git rev-parse --short HEAD) — $(git log -1 --format='%s')"
