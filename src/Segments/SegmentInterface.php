<?php

namespace Metroplex\Edifact\Segments;

/**
 * Represent a segment of an EDI message.
 */
interface SegmentInterface
{
    /**
     * Get the code of this segment.
     *
     * @return string
     */
    public function getSegmentCode();


    /**
     * Get all the elements from the segment.
     *
     * @return array
     */
    public function getAllElements();


    /**
     * Get an element from the segment.
     *
     * @param int $key The element to get
     *
     * @return mixed
     */
    public function getElement($key);


    /**
     * Set the value of an element in the segment.
     *
     * @param int $key The element to set
     * @param string $value The value to set
     *
     * @return void
     */
    public function setElement($key, $value);
}
