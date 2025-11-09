#!/usr/bin/env bash
TEMPLATE_DIR="${1:-fruits}"
DEST="public/theme/fruits"

if [ ! -d "$TEMPLATE_DIR" ]; then
  echo "ERROR: folder template '$TEMPLATE_DIR' tidak ditemukan"
  exit 1
fi

mkdir -p "$DEST"
cp -r "$TEMPLATE_DIR"/css "$DEST"/ || true
cp -r "$TEMPLATE_DIR"/js  "$DEST"/ || true
cp -r "$TEMPLATE_DIR"/img "$DEST"/ || true
cp -r "$TEMPLATE_DIR"/lib "$DEST"/ || true
cp -r "$TEMPLATE_DIR"/scss "$DEST"/scss || true  # optional

chmod +x scripts/copy-fruits-assets.sh || true

echo "Aset disalin ke $DEST (periksa public/theme/fruits/)"
