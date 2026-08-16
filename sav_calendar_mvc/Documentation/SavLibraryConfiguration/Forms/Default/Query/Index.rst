.. include:: ../../../../Includes.txt

.. _query&lt;Default:
.. role:: red

=====
Query
=====

The query ``Default`` contains the following configuration.

Main Table
==========

::

   tx_savcalendarmvc_domain_model_event



WHERE Clause
============

::

   date_end &gt;= UNIX_TIMESTAMP(NOW())

ORDER BY Clause
===============

::

   date_begin ASC