Changelog
=========

## x.y.z - UNRELEASED

--------

## 1.0.0 - 2018-01-14

### Added

* [Support] Add support for PHP 7.2
* [Parser/Serializer] Created a class to manage control characters.
* [Segments] Created a SegmentInterface and an AbstractSegment for downstream libraries.
* [Segments] Added a Factory for creating segments.

### Changed

* [Segments] Renamed the getName() method to getSegmentCode() to avoid downstream clashes.
* [Exceptions] Library specific exceptions are now thrown.

### Removed

* [Support] Drop support for HHVM

--------

## 0.1.1 - 2016-12-09

### Fixed

* [Serializer] Ensure control characters are escaped. (Henrik Nordquist)

--------

## 0.1.0 - 2015-08-24

### Added

* Initial Release
