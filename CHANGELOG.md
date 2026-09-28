# Changelog

## Unreleased - local startup fix

- Added a reusable hidden-process PHP launcher after the port 8000 development server had stopped.
- Documented restart instructions and distinguished a stopped web server from database connection errors.
- Verified Home and dashboard return HTTP 200 through loopback, and rerunning the launcher reuses the running instance.

## Unreleased - visual refresh

- Removed the shared demo banner, decorative labels, photo captions and decorative small taglines while retaining form guidance and committee roles.
- Replaced all displayed scene illustrations and the Home connection graphic with six optimized local photographs; recorded photo sources and credits.
- Added licensed local Inter variable font and applied it throughout the interface.
- Replaced em dashes and date-range en dashes in application copy with plain punctuation or wording.
- Checked all eight routes at three widths in Chrome and Edge and linted all 11 application/page PHP files.

## Unreleased - initial ClubConnect implementation

- Added the PHP/PDO club application with eight public pages, shared helpers and a four-table InnoDB schema.
- Added registration, dashboard login/profile/history, current committee permissions, event management, attendance and transactional RSVP/cancellation handling.
- Added the light navy-and-white interface, local representative artwork, favicon, responsive navigation and progressive form enhancement.
- Added private configuration, CSRF/session protections, login throttling, minimal file audit logging and safe local document-root examples.
- Added fictional CLI demo seeding, acceptance tooling and documentation for requirements, privacy, risks, local setup, backups, retention and demonstrations.
- Reviewed the original proposal and recorded the implementation brief's decisions for embedded login, email/FAQ contact, private file logs and manual retention.
- Verified PHP syntax, database rules and concurrent capacity handling, seed edit preservation, Chrome/Edge browser and no-JavaScript flows, and local Apache private-file restrictions; recorded actual coverage and remaining checks in `docs/testing.md`.

These are local working-tree changes. This record does not imply a release, historical commit, external deployment, GitHub push or completed restore. Consult `docs/testing.md` for executed test evidence.
