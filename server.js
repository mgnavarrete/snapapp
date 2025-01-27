import express from "express";
import fetch from "node-fetch";
const app = express();
const PORT = 5050;

// Ruta para el proxy
app.get("/proxy", async (req, res) => {
  const url = req.query.url;
  if (!url) {
    return res.status(400).send("URL is required");
  }

  try {
    const response = await fetch(url);
    const body = await response.buffer();

    // Establece el tipo de contenido de la respuesta
    res.set("Content-Type", response.headers.get("content-type"));
    res.send(body);
  } catch (err) {
    res.status(500).send("Error fetching the image");
  }
});

app.listen(PORT, () => {
  console.log(`Proxy server running on http://localhost:${PORT}`);
});
